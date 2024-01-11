<?php

namespace Model;

use Entity\Comment;
use Entity\Ticket;
use Exception;
use PDO;
use Studoo\EduFramework\Core\Service\DatabaseService;

class TicketModel
{
    private PDO $bdd;

    /**
     * @throws Exception
     */
    public function __construct()
    {
        $this->bdd = DatabaseService::getConnect();
    }
    public function fetchAll(): array
    {
        $request = $this->bdd->prepare('SELECT * FROM ticket');
        $request->execute();
        $ticketsArray = [];

        foreach ($request->fetchAll() as $value)
        {
            $ticket = new Ticket($value["id"],$value["email"],$value["message"]);
            $ticketsArray[] = $ticket;
        }

        return $ticketsArray;

    }

    public function create(Ticket $ticket): void
    {
        $request = $this->bdd->prepare('INSERT INTO ticket(email, message) VALUES(:email, :message)');
        $request->execute(['email' => $ticket->getEmail(), 'message' => $ticket->getMessage()]);
    }

    public function truncate(){
        $resetRequest = $this->bdd->prepare('TRUNCATE TABLE ticket');
        $resetRequest->execute();

        $popuplateRequest = $this->bdd->prepare("INSERT INTO `ticket` (`id`, `email`, `message`) VALUES (1, 'michel@compny.dev', 'Je galère à sauvegarder mon fichier Word'),(2, 'sandrine@compny.dev', 'Impossible de contacter le serveur de fichier');");
        $popuplateRequest->execute();
    }

}