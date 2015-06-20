<?php
/**
 * webtrees: online genealogy
 * Copyright (C) 2015 webtrees development team
 * Copyright (C) 2015 JustCarmen
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */
namespace JustCarmen\WebtreesAddOns\Module\FancyResearchLinks\Plugin;

use JustCarmen\WebtreesAddOns\Module\FancyResearchLinks\FancyResearchLinksClass;

class BillionGravesPlugin extends FancyResearchLinksClass {

	static function getPluginName() {
		return 'INT | Billion Graves';
	}

	static function createLink($name) {
		return 'http://billiongraves.com/pages/search/#given_names=' . $name['givn'] . '&family_names=' . $name['surname'] . '&birth_year=&death_year=&year_range=5&lim=0&num=10&action=search&exact=false&phonetic=true&record_type=0&country=0&state=0&county=0';
	}

}
