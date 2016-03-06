<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 28/01/16
 * Time: 15:07
 */

namespace AppBundle\User;


use Psr\Log\LoggerInterface;
/**
 * Class Register
 * @package AppBundle\User
 */
class Register
{
    private $logger;
    /**
     * Register constructor.
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @param $user
     * @param $password
     */
    public function createUser($user, $password)
    {
        $this->logger->info('User '.$user.' registered.');
        $this->logger->info(sprintf('User "$user" registered.', $user));
    }
}