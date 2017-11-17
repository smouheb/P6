<?php
/**
 * Created by PhpStorm.
 * User: MacBookAir
 * Date: 16/11/2017
 * Time: 21:49
 */

namespace CommandLine\CLIBundle\Command;

use CommandLine\CLIBundle\Entity\Groups;
use CommandLine\CLIBundle\Entity\Pictures;
use CommandLine\CLIBundle\Entity\Video;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use CommandLine\CLIBundle\lib\ParseYmlPhp;


class DataLoadCommand extends ContainerAwareCommand
{
    protected function configure()
    {
       $this->setName('App:Dataload')
            ->setDescription('Load your data')
            ->setHelp('This command will load all the necessary data for your project');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $input = new ParseYmlPhp();
        $datatohydrate = $input->getPictures();
        $datavideotohydrate = $input->getVideos();
        $datagrouptohydrate = $input->getGroup();

        $this->dataLoadPicture($datatohydrate);
        $this->dataLoadVideo($datavideotohydrate);
        $this->dataLoadGroup($datagrouptohydrate);

        $output->write('And your are done!');
    }

    public function dataLoadPicture($datatohydrate)
    {
        $em = $this->getContainer()->get('doctrine')->getManager();

        try{

            foreach ($datatohydrate as $pics){

                $entity = new Pictures();

                $newpics = $entity->setPics($pics);

                $em->persist($newpics);

            }
            $em->flush();


        } catch (Exception $e){

            $e->getMessage();
        }

    }

    public function dataLoadVideo($datavideotohydrate)
    {
        $em = $this->getContainer()->get('doctrine')->getManager();

        try{

            foreach ($datavideotohydrate as $videos){

                $entity = new Video();

                $newvideo = $entity->setVideo($videos);

                $em->persist($newvideo);

            }
            $em->flush();


        } catch (Exception $e){

            $e->getMessage();
        }


    }

    public function dataLoadGroup($datagrouptohydrate)
    {
        $em = $this->getContainer()->get('doctrine')->getManager();

        try{

            foreach ($datagrouptohydrate as $group){

                $entity = new Groups();

                $newgroup = $entity->setGroupName($group);

                $em->persist($newgroup);

            }
            $em->flush();


        } catch (Exception $e){

            $e->getMessage();
        }


    }

}