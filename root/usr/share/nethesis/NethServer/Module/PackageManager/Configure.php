<?php
namespace NethServer\Module\PackageManager;

/*
 * Copyright (C) 2012 Nethesis S.r.l.
 *
 * This script is part of NethServer.
 *
 * NethServer is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * NethServer is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with NethServer.  If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * TODO: add component description here
 *
 * @author Davide Principi <davide.principi@nethesis.it>
 * @since 1.0
 */
class Configure extends \Nethgui\Controller\AbstractController
{
    public function initialize()
    {
        parent::initialize();
        $this->getLog()->setLevel(E_ALL)->notice('INIT')->setLevel(E_ERROR | E_WARNING);
    }
    public function bind(\Nethgui\Controller\RequestInterface $request)
    {
        parent::bind($request);
        $this->getLog()->setLevel(E_ALL)->notice('BIND')->setLevel(E_ERROR | E_WARNING);
    }
    public function prepareView(\Nethgui\View\ViewInterface $view)
    {
        parent::prepareView($view);
        $this->getLog()->setLevel(E_ALL)->notice('VIEW')->setLevel(E_ERROR | E_WARNING);
    }
}