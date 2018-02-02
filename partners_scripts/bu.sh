#!/bin/bash
text="<div id=\"buwrapper\">
    <div id=\"buheader\" class=\"logotype-stacked\" role=\"banner\">
        <div class=\"bucontainer\">
            <div id=\"masthead\">
                <h1><a href=\"http://www.bumc.bu.edu/cme\"><img src=\"http://www.bumc.bu.edu/cme/files/logotype-stacked-white.png\" alt=\"Continuing Medical Education\" /></a></h1><p></p>
            </div><!--/#masthead-->

            <form method=\"get\" action=\"http://www.bu.edu/phpbin/search/cms.php\" id=\"quicksearch\"><fieldset><input type=\"hidden\" name=\"site\" value=\"http://www.bumc.bu.edu/cme\" ><select name=\"context\" id=\"qs_search_scope\"><option value=\"site\">This Site</option><option value=\"bumc\">BU Medical</option><option value=\"all_of_bu\">All BU</option><option value=\"maps\">BU Maps</option><option value=\"directory\">BU Directory</option><option value=\"google\">Google</option></select><input name=\"q\" type=\"text\" id=\"q\" ><input class=\"button\" type=\"submit\" name=\"do_search\" value=\"Search\" ></fieldset></form>
            <div id=\"pnb\" role=\"navigation\">
                <ul id=\"bunav\" class=\" \">
                    <li class=\"page_item page-item-17\">
                        <a title=\"Educational Opportunities\" href=\"http://www.bumc.bu.edu/cme/educational-opportunities/\" class=\"level_1\">Educational Opportunities</a>
                        <ul>
                            <li class=\"page_item page-item-15\">
                                <a title=\"Live Meetings\" href=\"http://www.bumc.bu.edu/cme/educational-opportunities/live-meetings/\" class=\"level_2\">Live Meetings</a>
                            </li>
                            <li class=\"page_item page-item-7\">
                                <a title=\"Regularly Scheduled Series (RSS)/Grand Rounds\" href=\"http://www.bumc.bu.edu/cme/educational-opportunities/regularly-scheduled-series-rss/\" class=\"level_2\">Regularly Scheduled Series (RSS)/Grand Rounds</a>
                            </li>
                            <li class=\"page_item page-item-9\">
                                <a title=\"Online Programs\" href=\"http://www.bumc.bu.edu/cme/educational-opportunities/online-programs/\" class=\"level_2\">Online Programs</a>
                            </li>
                            <li class=\"page_item page-item-11\">
                                <a title=\"Journal Programs\" href=\"http://www.bumc.bu.edu/cme/educational-opportunities/journal-programs/\" class=\"level_2\">Journal Programs</a>
                            </li>
                            <li class=\"page_item page-item-13\">
                                <a title=\"Performance Improvement Initiatives\" href=\"http://www.bumc.bu.edu/cme/educational-opportunities/performance-improvement-initiatives/\" class=\"level_2\">Performance Improvement Initiatives</a>
                            </li>
                            <li class=\"page_item page-item-391\">
                                <a title=\"Type 2 Diabetes Clinical Immersion Week\" href=\"http://www.bumc.bu.edu/cme/educational-opportunities/diabetes-clinical-immersion/\" class=\"level_2\">Type 2 Diabetes Clinical Immersion Week</a>
                            </li>
                            <li class=\"page_item page-item-3527\">
                                <a title=\"Request Information\" href=\"http://www.us1.list-manage.com/subscribe?u=fc5620ff57c135456fbe637c4&amp;id=7075a4ef88\" class=\"level_2\" target=\"_blank\">Request Information</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"page_item page-item-35\">
                        <a title=\"Meeting Management\" href=\"http://www.bumc.bu.edu/cme/meeting-management/\" class=\"level_1\">Meeting Management</a>
                    </li>
                    <li class=\"page_item page-item-19\">
                        <a title=\"Activity Planning\" href=\"http://www.bumc.bu.edu/cme/activity-planning/\" class=\"level_1\">Activity Planning</a>
                        <ul>
                            <li class=\"page_item page-item-21\">
                                <a title=\"CME Credit\" href=\"http://www.bumc.bu.edu/cme/activity-planning/cme-credit/\" class=\"level_2\">CME Credit</a>
                            </li>
                            <li class=\"page_item page-item-41\">
                                <a title=\"RSS Planning Packets\" href=\"http://www.bumc.bu.edu/cme/activity-planning/planning-packets/\" class=\"level_2\">RSS Planning Packets</a>
                            </li>
                            <li class=\"page_item page-item-37\">
                                <a title=\"Other Accreditation\" href=\"http://www.bumc.bu.edu/cme/activity-planning/other-accreditation/\" class=\"level_2\">Other Accreditation</a>
                            </li>
                            <li class=\"page_item page-item-39\">
                                <a title=\"Outcomes\" href=\"http://www.bumc.bu.edu/cme/activity-planning/outcomes/\" class=\"level_2\">Outcomes</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"page_item page-item-5\">
                        <a title=\"Our Team\" href=\"http://www.bumc.bu.edu/cme/our-team/\" class=\"level_1\">Our Team</a>
                        <ul>
                            <li class=\"page_item page-item-8772\">
                                <a title=\"Contact Us\" href=\"http://www.bumc.bu.edu/cme/our-team/contact-us/\" class=\"level_2\">Contact Us</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"page_item page-item-5543\">
                        <a title=\"CME Office Page\" href=\"http://www.bumc.bu.edu/cme/cme-office-page/\" class=\"level_1\">CME Office Page</a>
                    </li>
                    <li class=\"page_item page-item-50\">
                        <a title=\"Policies\" href=\"http://www.bumc.bu.edu/cme/policies/\" class=\"level_1\">Policies</a>
                    </li>
                    <li class=\"page_item page-item-725\">
                        <a title=\"Directions\" href=\"http://www.bumc.bu.edu/cme/directions/\" class=\"level_1\">Directions</a>
                    </li>
                    <li class=\"page_item page-item-52\">
                        <a title=\"Visiting Boston\" href=\"http://www.bumc.bu.edu/cme/visiting-boston/\" class=\"level_1\">Visiting Boston</a>
                    </li>
                </ul>
            </div><!--/#pnb-->
        </div><!--/.container-->
    </div><!--/#header-->
</div><!--/#wrapper-->
<div id=\"busep\"></div>"


filename="/Applications/XAMPP/xamppfiles/htdocs/latest/resources/views/learner/partners/headers/butheme/header.blade.php"
#printf '%s\n' 0a $text . x | ex $filename
echo $text  > $filename
#printf '%s\n' 0a $text . x | ex $filename