<footer>
        <div class="bg-footer pb-3">
            <div class="container">
                <div class="row">
                     <!--
                        ====================
                        formulaire du footer
                        ====================
                        -->
                    <div class="text-black col-lg-5">
                        <div class="text-center fs-3 mt-3">
                            <h3>Newsletter</h3>
                            <p class="fs-5 text-secondary">Get our latest info, podcasts, advices...</p>
                        </div>
                        <form action="../php/footer-form.php" method="post">
                            <div class="mb-3">
                                <label for="nom" class="form-label">First Name</label>
                                <input type="text" class="form-control" name="name-footer" id="nom" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email-footer" id="email" required>
                                </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" name="checkbox-prefere-french" id="prefere-french" value="french">
                                <label class="form-check-label" for="prefere-french">Je préfère recevoir les informations en français</label>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" name="checkbox-prefere-english" id="prefere-english" value="english">
                                <label class="form-check-label" for="prefere-english">I wish to receive the content in English</label>
                                </div>
                            <button type="submit" class="btn btn-primary">Subscribe</button>
                            </form>
                    </div>
                    <div class="col m-auto d-flex justify-content-evenly pt-3">
                        <a href="http://twitter.com/EnergyGenAfrica" target="_blank">
                            <img src="../image/twitter.webp" alt="lien vers twitter" class="img-sociaux">
                        </a>
                        <a href="https://www.linkedin.com/company/7936789/admin/" target="_blank">
                            <img src="../image/linkedin.webp" alt="lien vers linkedin" class="img-sociaux">
                        </a>
                        <a href="https://www.youtube.com/channel/UCXXWkX6rXa54FkD0oM3NkUQ/" target="_blank">
                            <img src="../image/youtube.webp" alt="lien vers notre chaine youtube" class="img-sociaux">
                        </a>
                        <a href="https://web.facebook.com/EnergyGeneration/" target="_blank">
                            <img src="../image/facebook.webp" alt="lien vers notre page facebook" class="img-sociaux">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <p class="my-3">&copy; 2022 - Energy Generation - All rights reserved.</p>
        </div>
    </footer>