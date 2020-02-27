<?php
namespace App\Model\Behavior;

use Cake\ORM\Behavior;
use Cake\ORM\Table;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;


/**
 * UploadRed behavior
 */
class UploadRedBehavior extends Behavior
{
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function uploadImgRed(array $file, $destino, $largura, $altura){


        $this->criarDiretorioImgRed($destino);

        $this->verExtensaoImg($file, $destino, $largura, $altura);
       //return $this->upload($file, $destino);
       return true;

        
    }

    public function verExtensaoImg($file, $destino, $largura, $altura){

        extract($file);
        switch ($type) {
            case 'image/jpeg';
            case 'image/pjpeg';

           $imagem = imagecreatefromjpeg($tmp_name);
           $imgRedimes = $this->redimensImg($imagem, $largura, $altura);
           imagejpeg($imgRedimes, $destino . $name);
              
                break;
            case 'image/png';
            case 'image/x-png';
    
            $imagem = imagecreatefrompng($tmp_name);
            $imgRedimes = $this->redimensImg($imagem, $lagura, $altura);
            imagepng($imgRedimes, $destino . $name);                break;
        }
    }

    protected function redimensImg($imagem, $largura, $altura){
       $largura_original = imagesx($imagem);
       $altura_original = imagesy($imagem);

        $imgRedimes = imagecreatetruecolor($largura, $altura);

        imagecopyresampled($imgRedimes, $imagem, 0, 0, 0, 0, $largura, $altura, $largura_original, $altura_original);

        return $imgRedimes;
    }

    protected function criarDiretorioImgRed($destino){

        $diretorio = new Folder($destino);

        if(is_null($diretorio->path)){
            $diretorio->create($destino);
        }
    }

    protected function upload($file, $destino){

        extract($file);
        //$name = $this->slug($name);
        if(move_uploaded_file($tmp_name, $destino . $name)){
            return $name;
        }else{
            return false;
        }

    }

    
    public function slugUploadImgRed($name){

        $formato['a'] = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]/?;:,\\\'<>°ºª';
        $formato['b'] = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr                                ';
        $name = strtr(utf8_decode($name), utf8_decode($formato['a']), $formato['b']);
        $name = str_replace(' ', '-', $name);

        $name = str_replace(['-----', '----', '---', '--'], '-', $name);

        $name = strtolower($name);

        return $name;
    }
}