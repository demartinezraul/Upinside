<?php
/**
 * Created by PhpStorm.
 * User: Raul
 * Date: 20/03/2015
 * Time: 15:47
 */

/**
 * Class Conn [CONEXAO]
 * Classe abstrata de conexao. Padrão SingleTon
 * Retorna um objeto PDO pelo método estático getConn();
 */
class Conn {

    private static $Host = HOST;
    private static $User = USER;
    private static $Pass = PASS;
    private static $Dbsa = DBSA;

    /** @var PDO*/
    private static $Connect = null; // SingleTon

    /** Conecta com o banco de dados com o Pattern SingleTon
     * Retorna um OBJETO PDO!
     */
    private static function Conectar(){
        try{
            if(self::$Connect == null):
                $dsn = 'pgsql:host=' . self::$Host . ';dbname=' . self::$Dbsa;
                $options = [ PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'];
                self::$Connect = new PDO($dsn, self::$User, self::$Pass, $options);

            endif;
        } catch (PDOException $e){
            PHPErro($e->getCode(), $e->getMessage(), $e->getFile(), $e->getLile());
            die;
        }

        self::$Connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return self::$Connect;
    }

    /** Retorna um objeto PDO SingleTon Pattern. */
    public static function getConn(){
        return self::Conectar();

    }


}