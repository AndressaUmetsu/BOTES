<p>Aqui temos a lista de todos os aeroportos:</p>

<?php foreach($aeroportos as $aeroporto) { ?>
  <p>
    <?php echo $aeroporto->getID(); ?>
    <a href='?controller=aeroportos&action=show&id=<?php echo $aeroporto->getID(); ?>'>Saiba mais...</a>
  </p>
<?php } ?>