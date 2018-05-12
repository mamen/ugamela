<?php

    // set the values for the topbar
    $this->lang['planet_galaxy'] = $data->getPlanet()->getGalaxy();
    $this->lang['planet_system'] = $data->getPlanet()->getSystem();
    $this->lang['planet_planet'] = $data->getPlanet()->getPlanet();
    $this->lang['planet_name'] = $data->getPlanet()->getName();
    $this->lang['planet_diameter'] = number_format($data->getPlanet()->getDiameter(), 0);
    $this->lang['planet_fields_current'] = $data->getPlanet()->getFieldsCurrent();
    $this->lang['planet_fields_max'] = $data->getPlanet()->getFieldsMax();
    $this->lang['planet_temp_min'] = $data->getPlanet()->getTempMin();
    $this->lang['planet_temp_max'] = $data->getPlanet()->getTempMax();
    $this->lang['planet_metal'] = $data->getPlanet()->getMetal();
    $this->lang['planet_crystal'] = $data->getPlanet()->getCrystal();
    $this->lang['planet_deuterium'] = $data->getPlanet()->getDeuterium();

    $this->lang['planet_metal_max'] = $units->getStorageCapacity($data->getBuildingData()->getMetalStorage());
    $this->lang['planet_crystal_max'] = $units->getStorageCapacity($data->getBuildingData()->getCrystalStorage());
    $this->lang['planet_deuterium_max'] = $units->getStorageCapacity($data->getBuildingData()->getDeuteriumStorage());


    $this->lang['planet_energy_used'] = number_format($data->getPlanet()->getEnergyUsed(), 0);
    $this->lang['planet_energy_max'] = number_format($data->getPlanet()->getEnergyMax(), 0);
    $this->lang['planet_image_small'] = Config::$gameConfig['skinpath'] . 'planeten/small/s_' . $data->getPlanet()->getImage() . '.png';
    $this->lang['icon_metal'] = Config::$gameConfig['skinpath'] . 'images/metal.gif';
    $this->lang['icon_crystal'] = Config::$gameConfig['skinpath'] . 'images/crystal.gif';
    $this->lang['icon_deuterium'] = Config::$gameConfig['skinpath'] . 'images/deuterium.gif';
    $this->lang['icon_energy'] = Config::$gameConfig['skinpath'] . 'images/energy.gif';

    $planetList = $data->getUser()->getPlanetList();

    for ($i = 0; $i < sizeof($planetList); $i++) {
        $current = "";

        if ($planetList[$i]->getPlanetID() == $data->getUser()->getCurrentPlanet()) {
            $current = " selected";
        }
        $this->lang['planet_dropdown'] .= "<option" . $current . " value=\"" . $planetList[$i]->getPlanetID() . "\">" . $planetList[$i]->getName() . " [" . $planetList[$i]->getGalaxy() . ":" . $planetList[$i]->getSystem() . ":" . $planetList[$i]->getPlanet() . "]</option>";
    }
