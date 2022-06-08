TEST BLUECOMPANY : 

DESARROLLADO POR DANIEL INOSTROZA PÉREZ.

INSTALACIÓN:

EN PRIMERA INSTANCIA PROCEDEMOS A DESCARGAR O CLONAR EL REPOSITORIO.
LUEGO CAMBIAMOS EL NOMBRE DE LA BASE DE DATOS Y SU DIRECCION

POSTERIORMENTE GENERAMOS LOS COMANDOS:

php artisan migrate

y llenamos la base de datos con la informacion de :

 php artisan db:seed --class=CreateUsuarioSeeder
 php artisan db:seed --class=CreateCategoriaSeeder
 php artisan db:seed --class=CreateProductoSeeder


acceso:
usuario : demo@demo.cl
contraseña: 12345678


para acceder a la api :


listado completo  :/api/producto
consulta producto : /api/producto/{id}
consulta por categoria :  /api/categoria/{id}

uso:

El uso del Grud se basa principalmente en las categorias de los produtos.
La principal caracteristicas de este módulo es que se le asigna si la categoria es perecible o no perecible.

el uso del GRUD de productos se complementa con la categoria ya que si es un producto perecible, se obligará a que se ingrese fecha de vencimiento.


