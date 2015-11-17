@extends('layouts.index')

@section('content')

<div id="page">
    <!--
    <script>var sections = {
            "basic": "In Progress",
            "education": "Disabled",
            "work": "Disabled",
            "interest": "Disabled",
            "essays": "Disabled",
            "submission": "Disabled",
            "acsignup": "Hidden"
        };
        var sectionDetails = {
            "acsignup": {
                "label": "Assessment Center Sign up",
                "desciption": "Click here to sign up for the Assessment Center stage.",
                "value": "acsignup",
                "icon": "fa fa-file-text",
                "col": "4",
                "left": "4",
                "right": "4",
                "row": "new"
            },
            "basic": {
                "label": "Basic Information",
                "desciption": "Start by entering your General Details and Contact Details",
                "value": "basic",
                "icon": "fa fa-th-list",
                "col": "4"
            },
            "work": {
                "label": "Professional Information",
                "desciption": "Fill in your Professional History and Work Details",
                "value": "work",
                "icon": "fa fa-briefcase",
                "col": "4"
            },
            "education": {
                "label": "Education Information",
                "desciption": "Fill in your Education History including Graduation",
                "value": "education",
                "icon": "fa fa-graduation-cap",
                "col": "4"
            },
            "interest": {
                "label": "Interest and Experiences",
                "desciption": "Fill in your other Internships, Extracurricular Activities and Clubs",
                "value": "interest",
                "icon": "fa fa-trophy",
                "col": "4"
            },
            "essays": {
                "label": "Essays",
                "desciption": "Fill in the Essays to tell us more about yourself and your interest in Teach For India",
                "value": "essays",
                "icon": "fa fa-file-text",
                "col": "4"
            },
            "submission": {
                "label": "Submission",
                "desciption": "Submit the complete form and move on to the next round",
                "value": "submission",
                "icon": "fa fa-cloud-upload",
                "col": "4"
            }
        };
        var user = {
            "_id": "563219ae333b30b4056d57b2",
            "eligible": "Eligible",
            "createdOn": "2015-10-29T13:05:50.411Z",
            "password": "1211864705496466",
            "email": "nfs1atako@gmail.com",
            "lastName": "Tsai",
            "firstName": "Ming-Shiun",
            "oauthID": 1211864705496466,
            "__v": 1,
            "contactMasterStatus": "Prospect",
            "sfSections": {
                "submission": "Not Started",
                "essays": "Not Started",
                "interest": "Not Started",
                "work": "Not Started",
                "education": "Not Started",
                "basic": "Not Started"
            },
            "formSections": {
                "acsignup": "Hidden",
                "submission": "Disabled",
                "essays": "Disabled",
                "interest": "Disabled",
                "work": "Disabled",
                "education": "Disabled",
                "basic": "In Progress"
            },
            "messageHistory": [{
                "message": "Please start by filling in the basic information section. The following sections will be enabled once you have entered all the details and submitted this section. ",
                "messageTitle": "Welcome to the Teach For India - Fellowship Application.",
                "timestamp": "2015-10-29T13:06:00.000Z",
                "_id": "563219b8333b30b4056d57b5"
            }],
            "sectionHistory": [],
            "contactMasterStatusHistory": [{
                "contactMasterStatus": "Prospect",
                "timestamp": "2015-10-29T13:06:00.000Z",
                "_id": "563219b8333b30b4056d57b4"
            }],
            "eligibilityCriteria": {
                "appliedIn": null,
                "hasApplied": false,
                "applyFirst": true,
                "isGraduate": true,
                "isCitizen": true
            },
            "modifiedOn": "2015-10-29T13:22:54.211Z"
        };
        //get most recent CMS details

        var messageHistory = _.sortBy(user.messageHistory, function (cms) {
            return cms.timestamp;
        }).reverse();
        var messageTitle = messageHistory.length > 0 ? messageHistory[0].messageTitle : null;
        var message = messageHistory.length > 0 ? messageHistory[0].message : null;
    </script>
    -->
    <div ng-controller="DashboardController" id="dashboard" class="container page ng-scope">
        <div class="row sectionTitle"><h1>Application Dashboard</h1></div>
        <div class="row">
            <div class="col-md-12"><!-- ngIf: user.eligible=='Eligible' && messageTitle!='' && messageTitle!=null -->
                <div ng-if="user.eligible=='Eligible' &amp;&amp; messageTitle!='' &amp;&amp; messageTitle!=null"
                     class="col-md-12 well background-white ng-scope">
                    <h3 class="text-center tfiOrange ng-binding">
                        Welcome to the Teach For India - Fellowship Application.
                    </h3><br>

                    <p class="text-center ng-binding">
                        Please start by filling in the basic information section. The
                        following sections will be enabled once you have entered all the details and submitted this
                        section.
                    </p>
                </div>
                <!-- end ngIf: user.eligible=='Eligible' && messageTitle!='' && messageTitle!=null -->
                <!-- ngIf: user.eligible=='Not Eligible' -->
            </div>
        </div><!-- ngIf: user.eligible=='Eligible' -->
        <div ng-if="user.eligible=='Eligible'" class="row ng-scope">
            <!-- ngRepeat: section in notSorted(sectionDetails) -->
            <div ng-repeat="section in notSorted(sectionDetails)" class="ng-scope">
                <div ng-class="{'col-md-12' : sectionDetails[section].row=='new'}" class="col-md-12">
                    <!-- ngIf: sections[section]!='Hidden' --></div>
            </div><!-- end ngRepeat: section in notSorted(sectionDetails) -->
            <div ng-repeat="section in notSorted(sectionDetails)" class="ng-scope">
                <div ng-class="{'col-md-12' : sectionDetails[section].row=='new'}">
                    <!-- ngIf: sections[section]!='Hidden' -->
                    <div ng-class="{'col-md-4' : sectionDetails[section].col=='4','col-md-offset-4' : sectionDetails[section].left=='4', 'col-md-12' : sectionDetails[section].col=='12'}"
                         ng-if="sections[section]!='Hidden'" ng-click="handleClick(section)"
                         ng-disabled="sections[section]==Disabled" class="float-shadow ng-scope col-md-4">
                        <div class="panel panel-default panel-dashboard">
                            <div class="panel-body"><p class="panel-head ng-binding"><i class="fa fa-th-list"> </i>
                                    Basic Information </p>

                                <p class="panel-description ng-binding">Start by entering your General Details and
                                    Contact Details</p><!-- ngIf: sections[section] == 'Not Started' -->
                                <!-- ngIf: sections[section] == 'In Progress' -->
                                <div ng-if="sections[section] == 'In Progress'" class="ng-scope"><p
                                            class="panel-status-inprogress ng-binding">In Progress<i
                                                class="glyphicon glyphicon-pencil glyphicon-tfi tfiYellow pull-right"></i>
                                    </p></div><!-- end ngIf: sections[section] == 'In Progress' -->
                                <!-- ngIf: sections[section] == 'Completed' -->
                                <!-- ngIf: sections[section] == 'Disabled' -->
                                <!-- ngIf: sections[section] == 'Submitted' --></div>
                        </div>
                    </div><!-- end ngIf: sections[section]!='Hidden' --></div>
            </div><!-- end ngRepeat: section in notSorted(sectionDetails) -->
            <div ng-repeat="section in notSorted(sectionDetails)" class="ng-scope">
                <div ng-class="{'col-md-12' : sectionDetails[section].row=='new'}">
                    <!-- ngIf: sections[section]!='Hidden' -->
                    <div ng-class="{'col-md-4' : sectionDetails[section].col=='4','col-md-offset-4' : sectionDetails[section].left=='4', 'col-md-12' : sectionDetails[section].col=='12'}"
                         ng-if="sections[section]!='Hidden'" ng-click="handleClick(section)"
                         ng-disabled="sections[section]==Disabled" class="float-shadow ng-scope col-md-4">
                        <div class="panel panel-default panel-dashboard">
                            <div class="panel-body"><p class="panel-head ng-binding"><i class="fa fa-briefcase"> </i>
                                    Professional Information </p>

                                <p class="panel-description ng-binding">Fill in your Professional History and Work
                                    Details</p><!-- ngIf: sections[section] == 'Not Started' -->
                                <!-- ngIf: sections[section] == 'In Progress' -->
                                <!-- ngIf: sections[section] == 'Completed' -->
                                <!-- ngIf: sections[section] == 'Disabled' -->
                                <div ng-if="sections[section] == 'Disabled'" class="ng-scope"><p
                                            class="panel-status-disabled ng-binding">Disabled<i
                                                class="glyphicon glyphicon-ban-circle glyphicon-tfi tfiEmbossGrey pull-right"></i>
                                    </p></div><!-- end ngIf: sections[section] == 'Disabled' -->
                                <!-- ngIf: sections[section] == 'Submitted' --></div>
                        </div>
                    </div><!-- end ngIf: sections[section]!='Hidden' --></div>
            </div><!-- end ngRepeat: section in notSorted(sectionDetails) -->
            <div ng-repeat="section in notSorted(sectionDetails)" class="ng-scope">
                <div ng-class="{'col-md-12' : sectionDetails[section].row=='new'}">
                    <!-- ngIf: sections[section]!='Hidden' -->
                    <div ng-class="{'col-md-4' : sectionDetails[section].col=='4','col-md-offset-4' : sectionDetails[section].left=='4', 'col-md-12' : sectionDetails[section].col=='12'}"
                         ng-if="sections[section]!='Hidden'" ng-click="handleClick(section)"
                         ng-disabled="sections[section]==Disabled" class="float-shadow ng-scope col-md-4">
                        <div class="panel panel-default panel-dashboard">
                            <div class="panel-body"><p class="panel-head ng-binding"><i
                                            class="fa fa-graduation-cap"> </i> Education Information </p>

                                <p class="panel-description ng-binding">Fill in your Education History including
                                    Graduation</p><!-- ngIf: sections[section] == 'Not Started' -->
                                <!-- ngIf: sections[section] == 'In Progress' -->
                                <!-- ngIf: sections[section] == 'Completed' -->
                                <!-- ngIf: sections[section] == 'Disabled' -->
                                <div ng-if="sections[section] == 'Disabled'" class="ng-scope"><p
                                            class="panel-status-disabled ng-binding">Disabled<i
                                                class="glyphicon glyphicon-ban-circle glyphicon-tfi tfiEmbossGrey pull-right"></i>
                                    </p></div><!-- end ngIf: sections[section] == 'Disabled' -->
                                <!-- ngIf: sections[section] == 'Submitted' --></div>
                        </div>
                    </div><!-- end ngIf: sections[section]!='Hidden' --></div>
            </div><!-- end ngRepeat: section in notSorted(sectionDetails) -->
            <div ng-repeat="section in notSorted(sectionDetails)" class="ng-scope">
                <div ng-class="{'col-md-12' : sectionDetails[section].row=='new'}">
                    <!-- ngIf: sections[section]!='Hidden' -->
                    <div ng-class="{'col-md-4' : sectionDetails[section].col=='4','col-md-offset-4' : sectionDetails[section].left=='4', 'col-md-12' : sectionDetails[section].col=='12'}"
                         ng-if="sections[section]!='Hidden'" ng-click="handleClick(section)"
                         ng-disabled="sections[section]==Disabled" class="float-shadow ng-scope col-md-4">
                        <div class="panel panel-default panel-dashboard">
                            <div class="panel-body"><p class="panel-head ng-binding"><i class="fa fa-trophy"> </i>
                                    Interest and Experiences </p>

                                <p class="panel-description ng-binding">Fill in your other Internships, Extracurricular
                                    Activities and Clubs</p><!-- ngIf: sections[section] == 'Not Started' -->
                                <!-- ngIf: sections[section] == 'In Progress' -->
                                <!-- ngIf: sections[section] == 'Completed' -->
                                <!-- ngIf: sections[section] == 'Disabled' -->
                                <div ng-if="sections[section] == 'Disabled'" class="ng-scope"><p
                                            class="panel-status-disabled ng-binding">Disabled<i
                                                class="glyphicon glyphicon-ban-circle glyphicon-tfi tfiEmbossGrey pull-right"></i>
                                    </p></div><!-- end ngIf: sections[section] == 'Disabled' -->
                                <!-- ngIf: sections[section] == 'Submitted' --></div>
                        </div>
                    </div><!-- end ngIf: sections[section]!='Hidden' --></div>
            </div><!-- end ngRepeat: section in notSorted(sectionDetails) -->
            <div ng-repeat="section in notSorted(sectionDetails)" class="ng-scope">
                <div ng-class="{'col-md-12' : sectionDetails[section].row=='new'}">
                    <!-- ngIf: sections[section]!='Hidden' -->
                    <div ng-class="{'col-md-4' : sectionDetails[section].col=='4','col-md-offset-4' : sectionDetails[section].left=='4', 'col-md-12' : sectionDetails[section].col=='12'}"
                         ng-if="sections[section]!='Hidden'" ng-click="handleClick(section)"
                         ng-disabled="sections[section]==Disabled" class="float-shadow ng-scope col-md-4">
                        <div class="panel panel-default panel-dashboard">
                            <div class="panel-body"><p class="panel-head ng-binding"><i class="fa fa-file-text"> </i>
                                    Essays </p>

                                <p class="panel-description ng-binding">Fill in the Essays to tell us more about
                                    yourself and your interest in Teach For India</p>
                                <!-- ngIf: sections[section] == 'Not Started' -->
                                <!-- ngIf: sections[section] == 'In Progress' -->
                                <!-- ngIf: sections[section] == 'Completed' -->
                                <!-- ngIf: sections[section] == 'Disabled' -->
                                <div ng-if="sections[section] == 'Disabled'" class="ng-scope"><p
                                            class="panel-status-disabled ng-binding">Disabled<i
                                                class="glyphicon glyphicon-ban-circle glyphicon-tfi tfiEmbossGrey pull-right"></i>
                                    </p></div><!-- end ngIf: sections[section] == 'Disabled' -->
                                <!-- ngIf: sections[section] == 'Submitted' --></div>
                        </div>
                    </div><!-- end ngIf: sections[section]!='Hidden' --></div>
            </div><!-- end ngRepeat: section in notSorted(sectionDetails) -->
            <div ng-repeat="section in notSorted(sectionDetails)" class="ng-scope">
                <div ng-class="{'col-md-12' : sectionDetails[section].row=='new'}">
                    <!-- ngIf: sections[section]!='Hidden' -->
                    <div ng-class="{'col-md-4' : sectionDetails[section].col=='4','col-md-offset-4' : sectionDetails[section].left=='4', 'col-md-12' : sectionDetails[section].col=='12'}"
                         ng-if="sections[section]!='Hidden'" ng-click="handleClick(section)"
                         ng-disabled="sections[section]==Disabled" class="float-shadow ng-scope col-md-4">
                        <div class="panel panel-default panel-dashboard">
                            <div class="panel-body"><p class="panel-head ng-binding"><i class="fa fa-cloud-upload"> </i>
                                    Submission </p>

                                <p class="panel-description ng-binding">Submit the complete form and move on to the next
                                    round</p><!-- ngIf: sections[section] == 'Not Started' -->
                                <!-- ngIf: sections[section] == 'In Progress' -->
                                <!-- ngIf: sections[section] == 'Completed' -->
                                <!-- ngIf: sections[section] == 'Disabled' -->
                                <div ng-if="sections[section] == 'Disabled'" class="ng-scope"><p
                                            class="panel-status-disabled ng-binding">Disabled<i
                                                class="glyphicon glyphicon-ban-circle glyphicon-tfi tfiEmbossGrey pull-right"></i>
                                    </p></div><!-- end ngIf: sections[section] == 'Disabled' -->
                                <!-- ngIf: sections[section] == 'Submitted' --></div>
                        </div>
                    </div><!-- end ngIf: sections[section]!='Hidden' --></div>
            </div><!-- end ngRepeat: section in notSorted(sectionDetails) --></div>
        <!-- end ngIf: user.eligible=='Eligible' --></div>
</div>

@endsection