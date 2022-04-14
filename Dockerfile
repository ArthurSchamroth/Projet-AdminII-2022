FROM ubuntu:latest

RUN apt-get update
RUN apt-get -y install bind9
RUN apt-get -y install bind9utils
RUN apt-get -y install vim

WORKDIR /etc/bind

VOLUME ["/etc/bind"]

COPY config/named.conf /etc/bind/named.conf
COPY config/named.conf.local /etc/bind/named.conf.local
COPY config/named.conf.options /etc/bind/named.conf.options

