#Clase para realizar una conexión a MySQL

Aquí encontraras un archivo conexion.php en el cual se encuentra una clase para realizar una conexión a MySQL, solamente es necesario proporcionar los datos necesarios y podras tener tu conexión. Para utilizarla, solamente es necesario estar requiriendo la clase en tu
archivo donde ocupes conectarte a la base de datos y solamente estar llamando
al método con(), este método te regresara la conexion.

#¿Como utilizarla?

Tendrás que hacer llamado a la clase Conexion y al método con() cuando utilices la sentencia mysql_query(), ejemplo:
    
    mysql_query = ("SELECT * FROM usuarios", Conexion::con());
