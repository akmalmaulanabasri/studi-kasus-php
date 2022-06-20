<form action="3a.php" method="post">           
            <input type="text" name="satu">
            <input type="text" name="dua">
            <input type="text" name="tiga"> <br> <br>
            <input type="submit" name="submit" value="Urutkan">
        </form>
 
        <?php  
        if(isset($_POST['submit']))
           {
            $satu=$_POST['satu'];
            $dua=$_POST['dua'];
            $tiga=$_POST['tiga'];
            $angka=array($satu,$dua,$tiga); 	
 
            sort($angka);  
            echo "</br>";
            echo "<div class='hasil'> Urutan : ";
            
            $jumlah = count($angka)-1;
            for($i=0;$i<=$jumlah;$i++){
             echo "Angka ke ".$i." = ".$angka[$i]."<br>";
            }
            for($a=0;$a<=$jumlah;$a++){
             for($b=$a;$b<=$jumlah;$b++){
              if($angka[$b]>$angka[$a]) {
               $tmp = $angka[$b];
               $angka[$b] = $angka[$a];
               $angka[$a] = $tmp;
              }
             }
            }
            echo "<br>";
            echo "hasil pengurutan <br>";
            for($i++;$i<=$jumlah;$i=0){
             echo $angka[$i].'<br>';
            }
        
        }
        ?>