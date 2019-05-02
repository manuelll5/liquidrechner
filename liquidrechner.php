<form action="processing.php" method="post">
  <table>
    <thead>
      <tr>
        <th>Liquidrechner</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Eingabe</td>
        <td>Rezept</td>
      </tr>
      <tr>
        <td>Gewünschte Liquidmenge in ml: <input name="liquidmenge" class="" type="text" autocomplete="off"></td>
        <td>Aroma: </td>
      </tr>
      <tr>
        <td>Aroma Anteil in %: <input name="aroma" class="" type="text" autocomplete="off"></td>
        <td>Nikotinshot: </td>
      </tr>
      <tr>
        <td>Nikotinstärke Nikotinshot in mg/ml: <input name="nikotinshot" class="" type="text" autocomplete="off"></td>
        <td>Nikotinfreie Base: </td>
      </tr>
      <tr>
        <td>Gewünschte Nikotinstärke in mg/ml: <input name="nikotinstärke" class="" type="text" autocomplete="off"></td>
        <td><input type="submit" value="Berechnen"></td>
      </tr>
    </tbody>
  </table>
</form>
