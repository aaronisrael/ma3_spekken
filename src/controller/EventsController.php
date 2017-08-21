<?php

require_once WWW_ROOT . 'controller' . DS . 'Controller.php';
require_once WWW_ROOT . 'dao' . DS . 'EventDAO.php';

class EventsController extends Controller {

  private $eventDAO;

  function __construct() {
    $this->eventDAO = new EventDAO();
  }

  public function index() {
    // $conditions = array();
    //
    // $conditions[] = array(
    //   'field' => 'start',
    //   'comparator' => '>=',
    //   'value' => date('Y-m-d H:i')
    // );

    $upcomingEvents = $this->eventDAO->selectUpcoming();
    $this->set('upcomingEvents', $upcomingEvents);
  }

  public function agenda() {
    //$conditions = array();

    //example: search on title
    // $conditions[] = array(
    //   'field' => 'title',
    //   'comparator' => 'like',
    //   'value' => 'patje'
    // );

    //example: search on location_id
    // $conditions[] = array(
    //   'field' => 'location_id',
    //   'comparator' => '=',
    //   'value' => 4
    // );

    //example: search on location name
    // $conditions[] = array(
    //   'field' => 'location',
    //   'comparator' => 'like',
    //   'value' => 'biljartzaal'
    // );

    //example: search on performer id
    // $conditions[] = array(
    //   'field' => 'performer_id',
    //   'comparator' => '=',
    //   'value' => '1'
    // );

    //example: search on organiser name
    // $conditions[] = array(
    //   'field' => 'organiser',
    //   'comparator' => 'LIKE',
    //   'value' => 'NL'
    // );

    //example: search on tag name
    // $conditions[] = array(
    //   'field' => 'tag',
    //   'comparator' => '=',
    //   'value' => 'figurentheater'
    // );

    //example: events in december - januari
    // $conditions[] = array(
    //   'field' => 'start',
    //   'comparator' => '>=',
    //   'value' => '2017-12-01 00:00:00'
    // );
    // $conditions[] = array(
    //   'field' => 'start',
    //   'comparator' => '<',
    //   'value' => '2018-01-31 23:59:59'
    // );

    //example: events on januari 6
    // $conditions[] = array(
    //   'field' => 'start',
    //   'comparator' => '>=',
    //   'value' => '2018-01-06 00:00:00'
    // );
    // $conditions[] = array(
    //   'field' => 'start',
    //   'comparator' => '<',
    //   'value' => '2018-01-06 23:59:59'
    // );

    //example: events in december - januari, with a certain tag
    // $conditions[] = array(
    //   'field' => 'start',
    //   'comparator' => '>=',
    //   'value' => '2017-12-01 00:00:00'
    // );
    // $conditions[] = array(
    //   'field' => 'start',
    //   'comparator' => '<',
    //   'value' => '2018-01-31 23:59:59'
    // );
    // $conditions[] = array(
    //   'field' => 'tag',
    //   'comparator' => '=',
    //   'value' => 'figurentheater'
    // );

    $conditions = array();

    if(!empty($_GET['search'])) {
      $conditions[] = array(
        'field' => 'title',
        'comparator' => 'like',
        'value' => $_GET['search']
      );
    }

    if(!empty($_GET['tag'])) {
      $conditions[] = array(
        'field' => 'tag',
        'comparator' => '=',
        'value' => $_GET['tag']
      );
    }

    if(!empty($_GET['periode'])) {
      if($_GET['periode'] == 1 ){
        $conditions[] = array(
          'field' => 'start',
          'comparator' => '>=',
          'value' => '2017-12-01 00:00:00'
        );
        $conditions[] = array(
          'field' => 'start',
          'comparator' => '<',
          'value' => '2018-02-01 00:00:00'
        );
      }
      if($_GET['periode'] == 2 )
      {
        $conditions[] = array(
          'field' => 'start',
          'comparator' => '>=',
          'value' => '2018-4-01 00:00:00'
        );
        $conditions[] = array(
          'field' => 'start',
          'comparator' => '<',
          'value' => '2018-5-01 00:00:00'
        );
      }
    }

    $events = $this->eventDAO->search($conditions);
    $this->set('events', $events);
  }

}
