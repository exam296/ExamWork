<?php
    include_once "../libraries/utilities.php";
    class TeachingGroups {

        function __construct($user){
            $this->user = $user;
        }

        function getGroups(){
            $db = Utils::connectDatabase();
            $teachingGroups = [];
            $sql = <<<SQL
                SELECT * FROM `TeachersTeachingGroups` WHERE `TeacherID` = {$this->user->getUserId()};
                SQL;
            $result = $db->query($sql);


            while($row = $result->fetch_assoc()){
                $sqlTeachingGroup = <<<SQL
                    SELECT * FROM `TeachingGroups` WHERE `ID` = {$row["TeachingGroupID"]};
                SQL;
                
                $result = $db->query($sqlTeachingGroup);
                $teachingGroup = $result->fetch_assoc();

                array_push($teachingGroups, $teachingGroup);
            }

            return $teachingGroups;
        }


        function getStudents($groupId){
            $db = Utils::connectDatabase();
            $sql = <<<SQL
                SELECT * FROM `TeachingGroupStudents` WHERE `TeachingGroupID` = {$groupId};
            SQL;
            
            $result = $db->query($sql);

            $students = [];

            while($row = $result->fetch_assoc()){
                $sql = <<<SQL
                    SELECT * FROM `Students` WHERE `ID` = {$row["StudentID"]};
                SQL;

                $result = $db->query($sql);
                $student = $result->fetch_assoc();
                array_push($students, $student);
            }

            return $students;

        
        }
    }
?>