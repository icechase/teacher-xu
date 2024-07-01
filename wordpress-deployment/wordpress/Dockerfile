FROM centos:7
RUN rpm -Uvh https://mirror.webtatic.com/yum/el7/epel-release.rpm && \ 
curl -o /etc/yum.repos.d/centOS-Base.repo http://mirrors.aliyun.com/repo/Centos-7.repo && \
rpm -Uvh https://mirror.webtatic.com/yum/el7/webtatic-release.rpm && \
yum install nginx php71w-fpm php71w-xsl php71w php71w-ldap php71w-cli php71w-common php71w-mysql php71w-mbstring php71w-bcmath php71w-mcrypt php71w-devel php71w-gd php71w-pdo -y && \
yum clean all && rm -rf /va/cache/yum/* && \
rm -rf /usr/share/nginx/html

COPY . /usr/share/nginx/html/

RUN useradd -M www && \
sed -i '/^user/c user www;' /etc/nginx/nginx.conf && \
sed -i '/^user/c user =www' /etc/php-fpm.d/www.conf && \
sed -i '/^group/c group =www' /etc/php-fpm.d/www.conf && \
chown -R www.www /usr/share/nginx/html/ /var/lib/nginx/

EXPOSE 80

COPY entrypoint.sh /
RUN chmod +x /entrypoint.sh
ENTRYPOINT ["bash","-c","/entrypoint.sh"]
