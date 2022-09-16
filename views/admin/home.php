
<i class="fa-solid fa-car"></i>

<div class="cardBox">
    <div class="card">
        <div>
            <div class="numbers"><?= $data['users'][0]['count'] ?></div>
            <div class="cardName">Users</div>
        </div>

        <div class="iconBx">
            <i class="fa fa-car"></i>
            <ion-icon name="people-outline"></ion-icon>

        </div>
    </div>

    <div class="card">
        <div>
            <div class="numbers"><?= $data['category'][0]['count']?></div>
            <div class="cardName">Categories</div>
        </div>

        <div class="iconBx">
            <ion-icon ios="bookmark-outline" md="md-contacts"></ion-icon>
        </div>
    </div>

    <div class="card">
        <div>
            <div class="numbers"><?= $data['car'][0]['count']?></div>
            <div class="cardName">Cars</div>
        </div>

        <div class="iconBx">
            <ion-icon name="car-outline"></ion-icon>
        </div>
    </div>

    <div class="card">
        <div>
            <div class="numbers">$7,842</div>
            <div class="cardName">Earning</div>
        </div>

        <div class="iconBx">
            <ion-icon name="cash-outline"></ion-icon>
        </div>
    </div>
</div>