FROM openjdk:8-jre
WORKDIR /
ADD target/demo-service-1.0.jar app.jar
EXPOSE 8080
ENTRYPOINT ["java", "-jar"]
CMD ["app.jar"]

