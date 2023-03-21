<?php
           $name = "joe";
           $query = "SELECT * FROM custemers WHERE name = :name";
           $queryexec = $database->prepare($query);
           $queryexec->bindParam(":name",$name);
           $queryexec->execute();
           $users = $queryexec->fetch();
           var_dump($users);


           ?>