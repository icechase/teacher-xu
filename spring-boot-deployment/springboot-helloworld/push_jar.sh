
#!/usr/bin/bash

groupId=$(mvn help:evaluate -Dexpression=project.groupId | egrep -v "[INFO]")
artifactId=$(mvn help:evaluate -Dexpression=project.artifactId | egrep -v "[INFO]")
version=$(mvn help:evaluate -Dexpression=project.version | egrep -v "\[INFO\]")
packaging=$(mvn  help:evaluate -Dexpression=project.packaging | egrep -v "[INFO]")


# 上传至nexus
mvn deploy:deploy-file \
-DgroupId=${groupId} \
-DartifactId=${artifactId} \
-Dversion=${version} \
-Dpackaging=${packaging} \
-Dfile=target/${artifactId}-${version}.${packaging} \
-Durl=http://localhost:8081/repository/maven-releases/ \
-DrepositoryId=nexus-releases \
-DgeneratePom=true
