<?php
    // Save end of file markup
    $endFile = $this->include_footer_scripts();
    $endFile .= ($frameset) ? "\n</frameset>" : "\n</body>";
    $endFile .= "\n</html>";
    if (!$this->xhtml) $endFile = str_replace(' />', '>', $endFile);
?>
        </div>
        <footer>
        <p>Footer Text</p>
        </footer>

<?php 
    
    // Echo end of file markup
    echo $endFile;