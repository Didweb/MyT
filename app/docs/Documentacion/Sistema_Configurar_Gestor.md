Configurar Gestor
=================

[Inicio Documentación][1] 

# Cómo funciona

Para poder crear nuestro se han de configurar algunos parámetros.

Estos parámetros se encuentran en le archivo de configuración: `config/gestor.yml`.

- 1: Las tablas que se han de listar en el CRUD.
- 2: Los campos que saldrán en el listado.
- 3: Los campos que son valores dependientes otras tablas, como por ejemplo una categoría.
- 4: Los campos que saldrán en los formularios así como el tipo de dato.
- 5: Los campos que precisan una traducción.
- 6: Idiomas del gestor.
- 7: Definir las tablas que precisan imágenes y los tamaños de las mismas.
- 8: Formularios anidados.
- 9: Campos Slug.
- 10: Carga de servicios.


Las configuraciones se crean en el  archivo `config/gestor.yml`.

## Configuración 1: Tablas del CRUD

```

Gestor:
    tablas: productos,categorias,subcategorias

```

Se ha de definir el parámetro `tablas` con el nombre de las tablas separadas por comas `,` .

Esto hace que se cree un menú en el gestor para poder acceder alas acciones del CRUD de cada tabla.



## Configuración 2: Campos para el listado

```

Campos:
    productos: id,nombre,idcategorias
    categorias: id,nombre,idsubcategorias 
    subcategorias: id,nombre


```
Dentro de `Campos` especificamos el nombre de cada tabla y luego los campos que deben salir en el listado, separados por comas `,`.


## Configuración 3: Definir campos dependientes

Con campos dependientes me refiero aquellos campos de los cuales depende otra tabla por ejemplo dentro de `productos` podemos tener un campo llamado `idcategoria` el cual depende de la tabla categorías.

Se especifica de la siguiente forma:

``` 

dependientes: productos.idcategorias:categorias|id|nombre@categorias.idsubcategorias:subcategorias|id|nombre 


```
dentro de `dependientes` ponemos los campos separados por `@` y dentro de cada tramo se especifican los siguientes parámetros:

En el ejemplo anterior tenemos productos.idcategorias:categorias|id|nombre**@**categorias.idsubcategorias:subcategorias|id|nombre dos grupos:

El primero:

```
productos.idcategorias:categorias|id|nombre

```
... nos dice que en la **tabla** : `productos`, tenemos un **campo**: `idcategoria`, Separado por con `:` viene otras características, donde tenemos **la tabla padre** (  de donde dependen los datos): `categorias`, el **campo identificativo**: id y el **campo que debe mostrar**: `nombre`



## Configuración 4: Campos para el formulario

Dentro de `Campos` encontramos esto ...

```
    tab_productos: id|oculto|int,nombre|nomral|string,idcategorias|depe|int,des|normal|string
    tab_categorias: id|oculto|int,nombre|nomral|string,idsubcategorias|depe|int
    tab_subcategorias: id|oculto|int,nombre|nomral|string

```

Donde se especifica los campos y el tipo,  que han de salir en los formularios, en este ejemplo:

Tenemos `tab_productos` se ha de especificar el nombre de la tabla con el prefijo `tab_`, Separado por comas `,` tenemos los campos y dentro diferentes especificaciones, por ejemplo en el primer tramo de `tab_productos` tenemos:

```

id|oculto|int


```

Separado por `|` se define id = Nombre del campo, oculto =  tipo de input en este caso sera oculto y int = tipo de dato.

Así que tenemos:


```

NOMBRE_CAMPO|TIPO_DE_INPUT|TIPO_DE_DATO

```

De momento existen las siguientes opciones:

**TIPO_DE_INPUT**: 
- oculto: Crea un input de tipo `hidden`.
- normal: Crea uno d etipo normal o `text`.
- depe: Creara un `select` con los datos proporcionados en la configuración de `dependientes`
- select: Crea un `select` con valores fijos configurables
- area: Crea un textarea.
- fechac: Crea un campo oculto de fecha al crearse un registro, para almacenar la fecha de creación.
- fecham: Crea un campo oculto de fecha al modificarse el registro para almacenar la fecha de creación.
- date: Crea un input ocn calendario de tipo fecha para poder poner fechas de forma cómoda y almacenar como date, (YYYY/MM/DD).


**TIPO_DE_DATO**:
- int: Es un integer, numero entero.
- string: Para cadenas de texto, alfanuméricas.
- fecha: Para determinar que es una fecha

Estas definiciones se irán ampliando según las necesidades.


**Configurar TIPO_DE_INPUT select**

Se especifica en el mismo archivo `config/gestor.yml` de la siguiente manera...

```

Select:
    opciones: productos.opciones*1|Opcion 1, 2|Opcion 2,3|Opcion 3@prductos.activo*1|Sí,0|No
    
```

En este ejemplo se especifican 2 campos separados por `@` ambos pertenecen a la tabla `productos` y uno se llama `opciones` y el otro `activo`, después del símbolo `*` se especifican los Valores y el nombre de las opciones separados por comas `,`.

Todo esto se genera en el archivo `app/Controlador.php` , en el método `camposselect`.

## Configuración 5: Campos que precisan traducción

Tendría este aspecto:

```

    trad_productos: nombre|nomral|string,des|area|string
    trad_categorias: nombre|nomral|string
    trad_subcategorias: nombre|nomral|string


```

* Desde la version 3.1.4 se han de especificar tipo de campo y formato.

Se definen con el prefijo `trad_` y a continuación el nombre de la tabla y serados por comas `,` se colocan los nombres de campos que precisan una traducción.



##  Aspecto del archivo `config/Gestor.yml`
Este es el aspecto del archivo: 

```

Gestor:
    tablas: productos,categorias,subcategorias
    n_listados: 1

Campos:
    productos: id,nombre,idcategorias
    categorias: id,nombre,idsubcategorias 
    subcategorias: id,nombre
    dependientes: productos.idcategorias:categorias|id|nombre@categorias.idsubcategorias:subcategorias|id|nombre  

    slugs: productos.slug:nombre

    tab_productos: id|oculto|int,nombre|nomral|string,idcategorias|depe|int,des|normal|string,slug|oculto|string
    tab_categorias: id|oculto|int,nombre|nomral|string,idsubcategorias|depe|int
    tab_subcategorias: id|oculto|int,nombre|nomral|string
    
    trad_productos: nombre|nomral|string,des|area|string
    trad_categorias: nombre|nomral|string
    trad_subcategorias: nombre|nomral|string

IMG:   
    IMGpatron: p,75,50,50,0|m,100,200,100,0|g,100,125,200,1
    IMGdir: src/images/fotos
    IMGdirMuestra: src/images/fotos/m/m_
    IMGtablas: productos
    
Anidados:
    Ani_pedidos: pedidosdetalle,idpedido|idproducto,cantidad
        
```




## Configuración 6: Idiomas del gestor


El gestor esta inicialmente con 3 idiomas : Español, Català e Inglès.

Si se quiere añadir un idioma más se a de especificar en el archivo `config/Config.yml` y el parámetro `idiomas_gestor: es,ca,en` añadir otro idioma separado por comas `,`. 
Entonces se habrán de crear los diccionarios en `src/locale`, primero la carpeta que corresponda y duplicar los diccionarios del gestor que son `comungestor_xx.yml` y `formpass_xx.yml`.



## Configuración 7: Imágenes


Se han de especificar que tablas necesitan vincular imágenes.

Posibilidades de subir imágenes para cada tabla:

- No existe límite en el número de imágenes por registro.
- No existen límites en los formatos y cantidad de tamaños.
- Cada formato o tamaño de imagen se almacena en un directorio.
- Se puede determinar el nivel de compresión de cada imagen.
- Se puede determinar si es preciso redimensionar y recortar la imagen o solamente redimensionar manteniendo el formato original.


Para configurar estos parámetros se ha de anotar en el archivo: `config/getsor.yml` con este aspecto (la parte de configuración de imágenes):


```


IMG:   
    IMGpatron: p,75,50,50,0|m,100,200,100,0|g,100,125,200,1
    IMGdir: src/images/fotos
    IMGdirMuestra: src/images/fotos/m/m_
    IMGtablas: productos


```

Para la redimensión de imágenes utilizo  [MyTSniper Resize][2] sigue este link para ver en detalle la documentación.

Explicare por encima un poco los parámetros:

- **IMGpatron**: Especifica las medidas se divide las medidas en `|` y dentro de cada medida por comas `,` se especifica: DIRECTORIO,CALIDAD,ANCHO,ALTO,CORTE .
- **IMGdir**: Se especifica el directorio principal donde se almacenarán los directorios de tamaños y sus imágenes, en este caso sera `src/images/fotos` y el directorio `fotos` deberá tener los permisos de escritura para poder escribir en él.
- **IMGdirMuestra**: es el directorio que se utiliza para mostrar en el gestor de contenidos.
- **IMGtablas**: Aquí separado por comas `,` se deberán especificar las tablas que llevarán imágenes en este caso solo la tabla `productos` tiene imágenes.


Para ver y entender como se almacenan y el proceso de almacenamiento consultar la documentación en [MyTSniper Resize][2]



## Configuración 8: Formularios anidados

Es posible insertar formularios relacionados y de forma anidada dentro de otro formulario, por ejemplo para los detalles del producto o para los temas de un disco, etc.

Para configurarlo en el archivo `config/gestor.yml`, se especifica estos parámetros:

```

Anidados:
    Ani_pedidos: pedidosdetalle,idpedido|idproducto,cantidad

```
Con el prefijo `Ani_` se define la tabla en ete caso se hace referencia a la tabla `pedidos`. 
Luego se especifican NOMBRE_TABLA , CAMPO_RELACIONADO | CAMPO_A_MOSTRAR_1 , CAMPO_A_MOSTRAR_1 , etc...

De esta forma dentro del formulario `pedidos` se insertara todos los registros de `pedidosdetalle` relacionados, además de un formulario para poder insertar nuevos registros de `pedidosdetalle` relacionados con `pedidos`.

Actualmente no es posible aplicar traducciones a estos campos.



## Configuración 9: Campos Slug

Se pueden crear campos ocultos de tipo slug. El campo siempre sera oculto y podremos determinar que campo ara de fuente para combertir el slug.

Para definir los campos se ara en el archivo `config/Gestor.yml` dentro del grupo de `Campos:` se pondrá algo similar a esto:

```

    slugs: productos.slug:nombre@OTRA_TABLA.slug:CAMPO_FUENTE@......@...

```

Dentro de `slugs`  pondremos todos los campos necesarios separados por `@` y en cada tramo definimos los siguientes parámetros para luego determinar el slug:

en el ejemplo anterior el primer tramo será:

**productos** : Es la tabla en la que se encuentra el slug.
**slug** : Es el nombre del slug que siempre se llamara slug, pro lo tanto en cada tabla solo podrá haber un campo de tipo slug.
**nombre** : Es el campo padre el que alimentara al slug, de donde cogerá los datos para transformar el slug.


En la definición de los campos a mostrar en el formulario se ha de poner siempre el ultimo campo el campo `slug` de la siguiente forma `....,slug|oculto|string`



## Configuración 10: Carga de servicios

Para cargar servicios estos se han de colocar en el directorio `src/Controller` también han de tener el nombre de archivo igual que el nombre de la clase.

Para llamar un servicio dentro de cualquier controlador,  se hace  de la siguiente forma:

```

		$servicio = $this->cargaServicio('probando');
		$servicio->saca('XXX');

```

En este ejemplo se llama a un archivo/Clase llamado `probando` y nos muestra un método llamado `saca`.



[1]:  Inicio_Documentacion.md
[2]:  https://github.com/Didweb/MyTsniper/blob/master/docs/resize.md
