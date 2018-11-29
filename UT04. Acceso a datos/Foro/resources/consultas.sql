select * from tema order by titulo;
select * from tema order by nombre;
select * from tema order by etiqueta;
select * from tema order by fecha_publicacion;

select * from tema where id_tema = (select id_tema from respuesta order by titulo);
select * from tema where id_tema in (select id_tema from respuesta group by id_tema );
select count(respuesta.id_tema), tema.id_tema from tema left join respuesta on tema.id_tema =+ respuesta.id_tema group by id_tema;

select 
	tema.id_tema, tema.titulo, tema.nombre, tema.etiqueta, tema.fecha_publicacion ,count(respuesta.id_tema) as 'respuestas' 
from 
	tema 
left join 
	respuesta 
on 
	tema.id_tema =+ respuesta.id_tema 
group by 
	tema.id_tema;





select id_tema, count(*) from respuesta group by id_tema;
select * from tema;
select * from respuesta;
insert into respuesta (titulo, usuario, contenido, id_tema)
values ("Resp. a nwe tema","PEPEEE","new planet",9);

insert into tema(titulo, nombre, clave, etiqueta)
values ("Mañana será hoy","Jorge","1234","El mañana");



select count(id_respuesta) from respuesta where id_tema=7;




