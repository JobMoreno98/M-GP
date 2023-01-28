# Diccionario de datos

**Nota:** las tablas se mecionan aqui como *[nombre-de-base-de-datos].[nombre-de-tabla]*

## Tabla de contenidos

- ### Base de datos
- ### Tablas
    - [usuarios](#global_politicsusarios)
    - (página) Inicio
        - [metas](#global_politicsmetas)
        - [eventos](#global_politicseventos)
        - [banner](#global_politicsbanner)
        - [galeria](#global_politicsgaleria)
    - (página) NAB
        - [academicos](#global_politicsacademicos)
        - [informacion](#global_politicsinformacion)
    - (página) Estudiantes
        - [tutorias](#global_politicstutorias)
        - [requisitos de ingreso](#global_politicsrequisitos_ingreso)
        - [requisitos de titulacion](#global_politicsrequisitos_titulacion)



<br>
<br>
<br>

## Tabla de usuarios 

<br>

### global_politics.usuarios

|NAME       |TYPE       |SIZE   |VALUES                     |OBSERVACIONES
|---        |---        |---    |---                        |---
|id         |INTEGER    |       |                           |PK
|correo     |VARCHAR    |200    |                           |UNIQUE
|pswd       |VARCHAR    |200    |
|rol        |ENUM       |       |'normal','administrador'

Volver a la [tabla de contenidos](#tablas)

<br>
<br>

## Para la página 'Inicio'

<br>

### global_politics.metas

|NAME               |TYPE       |SIZE   |VALUES     |OBSERVACIONES
|---                |---        |---    |---        |---
|prof_cert          |INTEGER    |
|est_egr            |INTEGER    |
|cursos             |INTEGER    |
|reconocimientos    |INTEGER    |
|tmst               |TIMESTAMP  |       |TODAY

Volver a la [tabla de contenidos](#tablas)

<br>

### global_politics.eventos

|NAME       |TYPE       |SIZE   |VALUES     |OBSERVACIONES
|---        |---        |---    |---        |---
|id         |INTEGER    |       |           |PK
|titulo     |VARCHAR    |200    |
|subtitulo  |VARCHAR    |200    |
|exponentes |JSON       |       |[]
|fecha      |DATE       |       |
|img_path   |VARCHAR    |200    |
|enlace     |VARCHAR    |200    |
|activo     |TINYINT    |       |(1, 0)
|btn_text   |VARCHAR    |100    |

Volver a la [tabla de contenidos](#tablas)

<br>

### global_politics.banner

|NAME       |TYPE       |SIZE   |VALUES     |OBSERVACIONES
|---        |---        |---    |---        |---
|id         |INTEGER    |       |           |PK
|img_path   |VARCHAR    |200    |
|enlace     |VARCHAR    |200    |
|activo     |TINYINT    |       |
|btn_type   |ENUM       |       |'yt','fb'

Volver a la [tabla de contenidos](#tablas)

<br>

### global_politics.galeria

|NAME       |TYPE       |SIZE   |VALUES     |OBSERVACIONES
|---        |---        |---    |---        |---
|id         |INTEGER    |       |           |PK
|nombre     |VARCHAR    |200    |           
|path       |VARCHAR    |200    |
|activo     |TINYINT    |       |
|btn_type   |ENUM       |       |'yt','fb'

Volver a la [tabla de contenidos](#tablas)

<br>
<br>

## Para la página 'NAB'

<br>

### global_politics.academicos

|NAME       |TYPE       |SIZE   |VALUES     |OBSERVACIONES
|---        |---        |---    |---        |---
|id         |INTEGER    |       |           |PK
|correo     |VARCHAR    |200    |           |UNIQUE
|nombre     |VARCHAR    |200
|apellidos  |VARCHAR    |200
|activo     |TINYINT    |       |(1, 0)

Volver a la [tabla de contenidos](#tablas)

<br>

### global_politics.informacion

|NAME           |TYPE       |SIZE   |VALUES                             |OBSERVACIONES
|---            |---        |---    |---                                |---
|id             |INTEGER    |       |                                   |PK
|id_academico   |INTEGER    |       |                                   |FK(global_politics.academicos.id)
|biogafia       |JSON       |       |ex: ['parrafo','parrafo']          |
|investigaciones|JSON       |       |ex: [{investigacion:'',activo:1}]  |
|proyectos      |JSON       |       |ex: [{proyecto:'',activo:1}]       |
|publicaciones  |JSON       |       |ex: [{publicaciones:'',activo:1}]  |

Volver a la [tabla de contenidos](#tablas)

<br>
<br>

## Estudiantes

<br>

# PENDIENTE !!
### global_politics.tutorias

|NAME           |TYPE       |SIZE   |VALUES     |OBSERVACIONES
|---            |---        |---    |---        |---
|id             |INTEGER    |       |

Volver a la [tabla de contenidos](#tablas)

<br>

### global_politics.requisitos_ingreso

|NAME           |TYPE       |SIZE   |VALUES                                 |OBSERVACIONES
|---            |---        |---    |---                                    |---
|id             |INTEGER    |       |
|requsitos      |JSON       |       |ex: [{numero:1,requisito:'',activo:1}] |

Volver a la [tabla de contenidos](#tablas)

<br>

### global_politics.requisitos_titulacion

|NAME           |TYPE       |SIZE   |VALUES                                 |OBSERVACIONES
|---            |---        |---    |---                                    |---
|id             |INTEGER    |       |
|requsitos      |JSON       |       |ex: [{numero:1,requisito:'',activo:1}] |

Volver a la [tabla de contenidos](#tablas)

<br>