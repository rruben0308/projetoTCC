<?PHP

class Conexao
{
    private static $instancia;
    public static function getConexao(){
        if (!isset(self::$instancia)){
            self::$instancia = new PDO('mysql:host=localhost; dbname=consultorio; charset=Utf8', 'root', '',);/*minha senha do banco - Ru12121971mrua# */
            return self::$instancia;
        } else{
            return self::$instancia;
        }

    }

}