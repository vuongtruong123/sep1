{*
Copyright 2011-2019 Nick Korbel

This file is part of Booked Scheduler.

Booked Scheduler is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Booked Scheduler is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Booked Scheduler.  If not, see <http://www.gnu.org/licenses/>.
*}
{include file='globalheader.tpl' cssFiles="https://cdn.rawgit.com/afeld/bootstrap-toc/v0.4.1/dist/bootstrap-toc.min.css"}

{include file='NewSpaper/index.php'}


// Content
// require 'templates/content.php';
 

 



    <script src="https://cdn.rawgit.com/afeld/bootstrap-toc/v0.4.1/dist/bootstrap-toc.min.js"></script>
    {include file="javascript-includes.tpl"}
    <script type="text/javascript">
        $(function () {
            var navSelector = '#toc';
            var $myNav = $(navSelector);
            Toc.init({
                $nav: $myNav,
                $scope: $('#help')
            });

            $('body').scrollspy({
                target: navSelector,
                offset: 50
            });
        });
    </script>
    {include file='globalfooter.tpl'}
