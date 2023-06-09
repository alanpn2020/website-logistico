function changeImage(imageUrl) {
    const bannerImage = document.querySelector('.banner');
    bannerImage.style.backgroundImage = `url('${imageUrl}')`;

    const dots = document.querySelectorAll('.dot');
    dots.forEach(dot => dot.classList.remove('active'));

    event.target.classList.add('active');
}
