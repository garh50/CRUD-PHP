<?php
 $host ="localhost";
 $user ="root";
 $pass = "";
 $bd = "curso";
 
 $con=mysqli_connect($host,$user, $pass,$bd);

 $sql="SELECT * FROM usuario";
 
 $result=mysqli_query($con,$sql);
            			
 //$result = $this->con->consultaRetorno($sql);
			
 print '
 <table>
 <thead>
     <th>rowid        </th>
     <th>id           </th>
     <th>firstname    </th>
     <th>lastname     </th>
     <th>createdate   </th>
     <th>birthdate    </th>
     <th>email        </th>
     <th>web          </th>
     <th>countryid    </th>
     <th>cityid       </th>
     <th>stateid      </th>
     <th>address      </th>
     <th>positionid   </th>
     <th>phone        </th>
     <th>legalid      </th>
 </thead>
 <tbody>';
  while($row = mysqli_fetch_array($result)):
     print '<tr>
     <td>'.$row['rowid'].'</td>
     <td>'.$row['id'].'</td>
     <tr>';
   endwhile; 
 print '</tbody>
</th>
</table>'


		





?>