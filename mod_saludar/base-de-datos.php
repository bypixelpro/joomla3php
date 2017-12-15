<?php
// Obtenemos la conexión con la base de datos
$db = JFactory::getDbo();

// Creamos una nueva query y la almacenamos en un objeto
$query = $db->getQuery(true);

// Preparamos las columnas que queremos insertar
$columns = array('user_id', 'profile_key', 'profile_value', 'ordering');

// Valores para esas columnas
$values = array(1001, $db->quote('custom.message'), $db->quote('Inserting a record using insert()'), 1);

// Preparamos la query para insertar
$query
    ->insert($db->quoteName('#__user_profiles'))
    ->columns($db->quoteName($columns))
    ->values(implode(',', $values));

// Ejecutamos al consulta con el objeto
$db->setQuery($query);
$db->execute();
