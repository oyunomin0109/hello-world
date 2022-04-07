<?php

namespace oyunomin\helloworld; //このファイルのパスを書くよ
//使うもののパスを書くよ
use pocketmine\Server; //同じパスのものは{ファイル名,ファイル名};と短縮できるよ
use pocketmine\player\Player;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase; 
//今回必要なuse文だよ

class Main extends PluginBase implements Listener{
    public function onEnable():void{ //この関数はサーバーが起動時になったときに呼び出されるよ
        $this->getServer()->getLogger()->info("helloworld"); //このpluginが読み込まれた時にコンソールにhelloworldと表示させるよ)
    }
}
