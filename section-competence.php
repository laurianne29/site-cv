    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-heading text-center">Compétences</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <span class="skills">
                        <table class="table table-striped text-center">
                            <th class="text-center text-uppercase">Compétence</th>
                            <th class="text-center text-uppercase">Niveau</th>
                            <?php 
                                $i = 0;
                                while($i < count($competences)){
                            ?>
                                <tr>
                                    <td>
                                        <?= $competences[$i]['competence']; ?>
                                    </td>
                                    <td> 
                                        <?= $competences[$i]['niveau']; ?>
                                    </td>
                                </tr>
                            <?php $i++; } ?>
                        </table>
                    </span>
                </div>
            </div>
        </div>
    </section>