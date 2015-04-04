<?php 

namespace Larabook\Statuses;

use Laracasts\Commander\CommandHandler; 

class PublishStatusCommandHandler implements CommandHandler{

	protected $statusRepository;

	public function __construct(StatusRepository $statusRepository){

		$this->statusRepository = $statusRepository;

	}

	public function handle($command){

		$status = Status::publish($command->body);

		$this->statusRepository->save($status, $command->userId);

	}
	
}