<?php

namespace CommandLine\CLIBundle\lib;

use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Yaml\Exception\ParseException;


class ParseYmlPhp
{
    private $filepicture = [];
    private $filevideo = [];
    private $filegroup = [];
    private $pictures = [];
    private $videos = [];
    private $group = [];

    //Constructors that retrieves the files and parse it at initiation level
    public function __construct()
    {

        try{

            $this->filepicture = Yaml::parse(file_get_contents(__DIR__.'/data/picture.yml'));
            $this->filevideo = Yaml::parse(file_get_contents(__DIR__.'/data/video.yml'));
            $this->filegroup = Yaml::parse(file_get_contents(__DIR__.'/data/group.yml'));

        } catch (ParseException $e){

            printf("Unable to parse this file", $e->getMessage());
        }

    }

    //method to loop through the array and allocate the data to picture and video

    public function arrayToPictures()
    {
        foreach ($this->filepicture as $pictures){

            $this->pictures[] = $pictures['url'];
        }

        return $this->pictures;
    }

    public function arrayToVideos()
    {
        foreach ($this->filevideo as $key => $video){

            $this->videos[] = $video['video_url'];
        }

        return $this->videos;
    }

    public function arrayToGroup()
    {
        foreach ($this->filegroup as $key => $group){

            $this->group[] = $group['groupName'];
        }

        return $this->group;
    }

    /**
     * @return mixed
     */
    public function getPictures()
    {
        return $this->arrayToPictures();
    }

    /**
     * @return mixed
     */
    public function getVideos()
    {
        return $this->arrayToVideos();
    }

    /**
     * @return mixed
     */
    public function getGroup()
    {
        return $this->arrayToGroup();
    }
}