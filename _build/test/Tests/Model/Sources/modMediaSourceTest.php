<?php
/**
 * MODX Revolution
 *
 * Copyright 2006-2014 by MODX, LLC.
 * All rights reserved.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package modx-test
 */
/**
 * Tests related to the modMediaSource class.
 *
 * @package modx-test
 * @subpackage modx
 * @group Model
 * @group Sources
 * @group modMediaSource
 */
class modMediaSourceTest extends MODxTestCase {
    /** @var modMediaSource $source */
    public $source;

    /**
     * @return void
     */
    public function setUp() {
        parent::setUp();

        $this->modx->loadClass('sources.modMediaSource');
        $this->source = $this->modx->newObject('sources.modMediaSource');
        $this->source->fromArray(array(
            'name' => 'UnitTestSource',
            'description' => '',
            'class_key' => 'sources.modFileMediaSource',
            'properties' => array(),
        ),'',true);
    }
    public function tearDown() {
        parent::tearDown();
        $this->source = null;
    }
    
    public function testExample() {
        $this->assertTrue(true);
    }
}