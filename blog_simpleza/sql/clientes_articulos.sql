CREATE TABLE `blog_simpleza`.`articulos` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `titulo` VARCHAR(200) NOT NULL ,
    fecha timestamp not null,
    texto text not null, 
    thumb VARCHAR(1000) not null,
    `extracto` VARCHAR(200) NOT NULL, PRIMARY KEY (`id`)) ENGINE = InnoDB;

