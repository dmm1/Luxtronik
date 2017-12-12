<?
class Luxtronik extends IPSModule
{
	var $IP;
	var $Port;
	var $Name;


    public function Create()
    {

        parent::Create();

        //These lines are parsed on Symcon Startup or Instance creation
        //You cannot use variables here. Just static values.
        $this->RegisterPropertyString("IP", "192.168.1.200");
        $this->RegisterPropertyString("Port", "8888");
        $this->RegisterPropertyString("Name", "Novelan LIC 12E");

    }



}
?>
