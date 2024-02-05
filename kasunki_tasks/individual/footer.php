</article>
  <footer>

        <h2>Related Topics</h2>
         <ul>
           <li><a href="https://www.bbc.com/news/topics/c8nq32jw88jt">Robotics</a></li>
           <li><a href="https://www.bbc.com/news/topics/ce1qrvleleqt">Artificial intelligence</a></li>
           <li><a href="https://www.bbc.com/news/topics/cljev49lzr4t">Electric cars</a></li>
         </ul>
         
         <?php   
         $filename = $_SERVER['DOCUMENT_ROOT'] . $_SERVER['SCRIPT_NAME'];
         $lastModifiedTime = filemtime($filename);
         $formattedLastModified = date("F j, Y, g:i a", $lastModifiedTime);
         echo "Last modified: " . $formattedLastModified;
         ?>

  </footer>
  </div>
</body>
</html>