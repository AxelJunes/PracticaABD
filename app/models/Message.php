<?php

/**
 * Class Message
 * @
 */

class Message extends EntityBase {

    private $id;
    private $sender;
    private $receiver;
    private $subject;
    private $m_text;
    private $m_date;

    public function __construct() {
        $this->table = "messages";
        $class = "Message";
        parent::__construct($this->table, $class);
    }

    /**
     * Create group
     */
     public function create() {
         $insert = $this->db()->prepare("INSERT INTO messages (id, sender, receiver, subject, m_text, m_date) VALUES (?, ?, ?, ?, ?, ?)");
         $insert->bindParam(1, $this->getId(), PDO::PARAM_INT);
         $insert->bindParam(2, $this->getSender(), PDO::PARAM_STR);
         $insert->bindParam(3, $this->getReceiver(), PDO::PARAM_STR);
         $insert->bindParam(4, $this->getSubject(), PDO::PARAM_STR);
         $insert->bindParam(3, $this->getMtext(), PDO::PARAM_STR);
         $insert->bindParam(4, $this->getMdate(), PDO::PARAM_STR);
         //Execute prepared statement
         $insert->execute();
     }

    //Getter and setter methods

    /**
    * Get id
    */
    public function getId(){
        return $this->id;
    }

    /**
    * Set id
    */
    public function setId($id){
        $this->id = $id;
    }

    /**
    * Get sender
    */
    public function getSender(){
        return $this->sender;
    }

    /**
    * Set sender
    */
    public function setSender($sender){
        $this->sender = $sender;
    }

    /**
    * Get receiver
    */
    public function getReceiver(){
        return $this->receiver;
    }

    /**
    * Set receiver
    */
    public function setReceiver($receiver){
        $this->receiver = $receiver;
    }

    /**
    * Get message subject
    */
    public function getSubject(){
        return $this->subject;
    }

    /**
    * Set message subject
    */
    public function setSubject($subject){
        $this->subject = $subject;
    }

    /**
    * Get text
    */
    public function getMtext(){
        return $this->m_text;
    }

    /**
    * Set text
    */
    public function setMtext($m_text){
        $this->m_text = $m_text;
    }

    /**
    * Get date
    */
    public function getMdate(){
        return $this->m_date;
    }

    /**
    * Set date
    */
    public function setMdate($m_date){
        $this->m_date = $m_date;
    }

    /**
    * Get db table
    */
    public function getTable(){
        return $this->table;
    }

    /**
    * Set db table
    */
    function setTable($table){
        $this->table = $table;
    }
}
?>
