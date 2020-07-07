<?php

use App\Feature;
use App\Project;
use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $project = Project::create([
            'name' => 'E-commerce para Refaccionaria Zapata Camiones Aeropuerto',
            'description' => 'Participé en la implementación del sistema E-commerce de venta de autopartes para Zapata Camiones S.A de C.V. sucursal Aeropuerto; Además, implementé un sistema de control administrativo para clientes, productos, y ventas.',
            'path_cover_page' => 'img/cover_pages/portada_refaccionaria_zapata_camiones.jpg',
            'path_video' => 'videos/video_demostrativo_zapata_camiones.mp4',
            'link' => 'https://www.refaccionariazapata.com/',
            'date' => 'Julio del 2020',
        ]);

        $project->features()->attach([
            Feature::where('description', 'Pagos electrónicos')->first()->id,
            Feature::where('description', 'Importacion / Exportacion Excel')->first()->id,
            Feature::where('description', 'Envío de correo')->first()->id,
            Feature::where('description', 'Gráficas (de reportes)')->first()->id,
            Feature::where('description', 'Seguridad con perfiles de acceso')->first()->id,
        ]);

        $project = Project::create([
            'name' => 'ERP para Arbys',
            'description' => 'Participé en el desarrollo de un sistema ERP (Entrepise Resource Planning) y CRM (Cutomer Relationship Management) para la administración de Arbys.',
            'path_cover_page' => 'img/cover_pages/portada_arbys.jpg',
            'path_video' => 'videos/video_demostrativo_arbys.mp4',
            'link' => 'http://siaa.planarbys.com',
            'date' => 'enero del 2020',
        ]);

        $project->features()->attach([
            Feature::where('description', 'Importacion / Exportacion Excel')->first()->id,
            Feature::where('description', 'Envío de correo')->first()->id,
            Feature::where('description', 'Seguridad con perfiles de acceso')->first()->id,
            Feature::where('description', 'Creación de PDF')->first()->id,
        ]);

        $project = Project::create([
            'name' => 'Material UC',
            'description' => 'Participé en la implementación un sistema web que se 
                encarga de controlar los préstamos de dispositivos y herramientas 
                de la División de Ingenierías Civíl y Geomática, mediante escaneo 
                de QR para usuarios y materiales. Los lenguajes y frameworks utilizados 
                fueron PHP, MySQL, javascript, CSS, HTML y bootstrap.

                Las tareas que realicé en este proyecto fueron el desarrollo del frontend 
                del sistema web completo, el desarrollo de las funciones CRUD para la 
                administración de usuarios y materiales, la implementación del sistema de 
                login mediante escanéo de código QR, así como la lógica de programación para el 
                control de préstamos de los materiales.',
            'path_cover_page' => 'img/cover_pages/portada_material_uc.png',
            'path_video' => 'videos/video_demostrativo_materialuc.mp4',
            'link' => 'http://132.248.139.119/~materialuc/',
            'date' => 'febrero del 2019'
        ]);

        $project->features()->attach([
            Feature::where('description', 'Escanéo QR')->first()->id,
        ]);

        $project = Project::create([
            'name' => 'To-do App',
            'description' =>
            'Implementé un administrador de tareas que consite en dos pestañas, la primera 
            se encarga de mostrar las tareas pendientes y la segunda pestaña las tareas terminadas. 
                Estas pueden ser editadas o incluso, eliminadas. Las tecnologías que utilicé fueron 
                Ionic 3 y Angular 7.',
            'path_cover_page' => 'img/cover_pages/portada_to_do_app.png',
            'path_video' => 'videos/video_demostrativo_to_do_app.mp4',
            'date' => 'mayo del 2019'
        ]);

        $project->features()->attach([
            Feature::where('description', 'Animación digital')->first()->id,
        ]);

        $project = Project::create([
            'name' => 'Juego de aviones',
            'description' => 
                'Es un juego sencillo que consite en disparar a naves extraterrestres 
                para evitar que estas puedan invadir el planeta tierra. Las tecnologías 
                empleadas para este proyecto fueron HTML, CSS, Javascript, así como jquery.',
            'path_cover_page' => 'img/cover_pages/portada_juego_aviones.png',
            'path_video' => 'videos/video_demostrativo_juego_aviones.mp4',
            'date' => 'diciembre 2018'
        ]);

        $project->features()->attach([
            Feature::where('description', 'Animación digital')->first()->id,
        ]);

        $project = Project::create([
            'name' => 'To-Do MERN',
            'description' => 
                'Aplicación MERN FULL Stack (MongoDB, Express, React.js y NodeJs). 
                Se encarga de realizar la administración de tareas pendientes que 
                tenga el usuario mediante operaciones CRUD (create, read, update y delete) 
                a la base de datos haciendo uso de peticiones HTTP al servidor.',
            'path_cover_page' => 'img/cover_pages/portada_todo_app_mern_stack.jpg',
            'path_video' => 'videos/video_demostrativo_mern_stack_to_do_app.mp4',
            'date' => 'junio del 2019',
        ]);

        $project->features()->attach([
            Feature::where('description', 'Notificaciones')->first()->id,
            Feature::where('description', 'Almacenamiento en tiempo real')->first()->id,
        ]);
    }
}
