<?php
/**
 * 管理员账号模型
 */
class lib_administor extends spModel{
    public $pk = 'id';
    public $table = 'administor';
    var $linker = array(
        array(
            'type' => 'hasone',
            'map' => 'role',
            'mapkey' => 'identify_id',
            'fclass' => 'lib_adminrole',
            'fkey' => 'identify_id',
            'enabled' => TRUE
        )
    );
    public function acljump(){ 
		// 无权限提示
		$url = spUrl("main","login");

		echo "

        <html>

        <head>

        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">

        <script>

        function sptips()

        {

            alert(\"您没有权限进行此操作\");

            top.location.href=\"{$url}\";

        }            

        </script>

        </head>

        <body onload=\"sptips()\">

        </body>

        </html>";

		exit;

	}

}