<?php

    declare(strict_types=1);

    require_once __DIR__.'/config.php';

    require_once ROOT . "/core/classes/data/user.php";

    use PHPUnit\Framework\TestCase;

    final class DataUserTest extends TestCase {

        private $userData;

        protected function setUp() : void {
            $this->userData = new D_User(123, "testname", "email@mail.at", time(), 0, 0,0,0);
        }

        /**
         * @covers D_User::setUserID
         * @covers D_User::getUserID
         */
        public function testGetSetUserID() : void {
            $this->userData->setUserID(1);
            $this->assertSame(1, $this->userData->getUserID());
        }

        /**
         * @covers D_User::setUsername
         * @covers D_User::getUsername
         */
        public function testGetUsername() : void {
            $this->userData->setUsername("Test");
            $this->assertSame("Test", $this->userData->getUsername());
        }

        /**
         * @covers D_User::setEmail
         * @covers D_User::getEmail
         */
        public function testGetSetEmail() : void {
            $this->userData->setEmail("a@a.at");
            $this->assertSame("a@a.at", $this->userData->getEmail());
        }

        /**
         * @covers D_User::setOnlineTime
         * @covers D_User::getOnlineTime
         */
        public function testGetOnlineTime() : void {
            $ot = time() + 100;

            $this->userData->setOnlineTime($ot);
            $this->assertSame($ot, $this->userData->getOnlineTime());
        }

        /**
         * @covers D_User::getCurrentPlanet
         */
        public function testGetCurrentPlanet() : void {
            $this->assertSame(0, $this->userData->getCurrentPlanet());
        }

        /**
         * @covers D_User::setPlanetList
         * @covers D_User::getPlanetList
         */
        public function testGetSetPlanetList() : void {
            $this->userData->setPlanetList([15, 18, 123]);

            $this->assertSame(3, count($this->userData->getPlanetList()));
            $this->assertSame(15, $this->userData->getPlanetList()[0]);
            $this->assertSame(18, $this->userData->getPlanetList()[1]);
            $this->assertSame(123, $this->userData->getPlanetList()[2]);
        }

        /**
         * @covers D_User::setPoints
         * @covers D_User::getPoints
         */
        public function testGetSetPoints() : void {
            $this->userData->setPoints(567);
            $this->assertSame(567, $this->userData->getPoints());
        }

        /**
         * @covers D_User::setCurrentRank
         * @covers D_User::getCurrentRank
         */
        public function testGetSetCurrentRank() : void {
            $this->userData->setCurrentRank(12);
            $this->assertSame(12, $this->userData->getCurrentRank());
        }

        /**
         * @covers D_User::setOldRank
         * @covers D_User::getOldRank
         */
        public function testGetSetOldRank() : void {
            $this->userData->setOldRank(15);
            $this->assertSame(15, $this->userData->getOldRank());
        }

    }