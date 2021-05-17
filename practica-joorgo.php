<?php
/**
 * Función para validar si el usuario introducido en el formulario cumple los parámetros
 *
 * @author Jorge Ortega
 * @version 1.1
 * @param string $name Recibe el nombre del usuario
 * @return boolean Devolveremos false si el nombre tiene menos de 4 caracteres
 * @return boolean Devolveremos false si el nombre no está compuesto por caracteres de la A a la Z
 * @return boolean Devolveremos true si está todo correcto
 * @access private 
 * @param string $nombre deberíamos estudiar también un filtro por si el nombre es muy feo
 */
function validateUsername($name){
	if(strlen($name) < 4){
		return false;
	}
	else if(!preg_match("/^[a-zA-Z]+$/",$name)){
		return false;
	}
	else{
		return true;
	}
}
/**
 * Función para validar si la contraseña introducida en el formulario cumple los parámetros
 *
 * @author Jorge Ortega
 * @version 1.1
 * @param string $password1 Recibe la contraseña del usuario
 * @return boolean Devolveremos false si la contraseña tiene menos de 5 caracteres
 * @return boolean Devolveremos false si la contraseña no tiene los caracteres adecuados
 * @return boolean Devolveremos true si está todo correcto
 * @access private 
 * @param string $contraseña1 tiene que ir oculto
 */
function validatePassword1($password1){
	if(strlen($password1) < 5 || strlen($password1) > 12){
	
		return false;
	}
	else if(!preg_match("/^[0-9a-zA-Z]+$/",$password1)){
		return false;
	}
	else{
		return true;
	}
}
/**
 * Función para validar si la contraseña 2 introducida en el formulario coincide con la contraseña 1
 *
 * @author Jorge Ortega
 * @version 1.1 
 * @param string $password1 Recibe la contraseña que el usuario puso en el campo anterior
 * @param string $password2 Recibe la contraseña que el usuario pone en el campo de repetir contraseña
 * @return boolean Devolveremos false si las dos contraseñas no coinciden
 * @return boolean Devolveremos true si coinciden
 * @access private 
 * @param string $contraseña2 tiene que ir oculto
 */
function validatePassword2($password1,$password2){	
	if($password1 != $password2){
		return false;
	}else{
		return true;
	}
}
/**
 * Función para validar si el email introducido en el formulario cumple los parámetros
 *
 * @author Jorge Ortega
 * @version 1.1
 * @param string $email Recibe el email del usuario
 * @return boolean Devolveremos false si el campo está vacío
 * @return boolean Devolveremos false si el email no tiene los caracteres adecuados
 * @return boolean Devolveremos true si está todo correcto
 * @access private
 * @param string $mirar dominios sospechosos que no se puedan incluir
 */
function validateEmail($email){
	if(strlen($email) == 0){
		return false;
	}	
	else if(!filter_var($_POST['email'],FILTER_SANITIZE_EMAIL)){
		return false;
	}
	else{
		return true;
	}
}
?>
