<?php include 'includes/header.php'; ?>

<div class="home">
    <div class="home__title">
        <h3>THE ULTIMATE LUXURY EXPERIENCE</h3>

        <h1>The Perfect Base For You</h1>

        <button>Take a Tour</button>
        <button>Learn more</button>
    </div>

    <div class="home__date">
        <label for="arrival">Arrival Date</label>
        <input type="date" value="2020-03-24" name="arrival">
        <label for="departure">LeDeparture Date</label>
        <input type="date" value="2020-03-30" name="departure">

        <a class="data-desktop" href="rooms-list.php">Check availability</a>
        <a class="data-mobile" href="rooms-grid.php">Check availability</a>
    </div> 

    <div class="home__about">

        <div class="about__header">
            <span>About Us</span>

            <h2>Discover Our Underground.</h2>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore 
                magna aliqua. Ut enim ad minim veniam, quis nostrud 
                exercitation ullamco laboris nisi ut aliquip ex ea 
                commodo consequat.
            </p>

            <button>Book Now</button>
        </div>

        <div class="img-team"> 
            <img src="src/img/imgGris.png" alt="imagen">
        </div>

        <div class="about__team">
            <div class="team">
                <svg class="item" width="68" height="50" viewBox="0 0 68 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M64.9602 36.693L60.8463 35.5176C60.6688 35.4668 60.5447 35.3024 60.5447 35.1177V33.7445C60.8794 33.5126 61.1987 33.2531 61.4971 32.9635C62.9434 31.5599 63.7399 29.6773 63.7399 27.6622V25.7674L64.1377 24.972C64.5742 24.0988 64.8049 23.1211 64.8049 22.145V17.0117C64.8049 16.4616 64.3589 16.0157 63.8088 16.0157H54.2234C50.7378 16.0157 47.902 18.8515 47.902 22.337V22.3964C47.902 23.2081 48.0939 24.0211 48.4569 24.747L48.967 25.7673V27.3942C48.967 29.9727 50.2377 32.2861 52.1622 33.6783L52.1625 35.1174C52.1625 35.3393 52.1625 35.4312 51.34 35.6663L49.3327 36.2398L43.526 34.1284C43.5468 33.8544 43.4544 33.5757 43.2545 33.3657L41.399 31.4163V28.1438C41.5951 27.9822 41.7885 27.8162 41.9759 27.6406C44.3167 25.4465 45.6592 22.3488 45.6592 19.1418V16.5283C46.366 14.9902 46.7242 13.3626 46.7242 11.6864V1.03613C46.7242 0.486023 46.2783 0.0400391 45.7281 0.0400391H30.8174C25.57 0.0400391 21.301 4.30916 21.301 9.55645V11.6866C21.301 13.3629 21.6592 14.9905 22.366 16.5286V18.7772C22.366 22.5008 24.0217 25.8553 26.6262 28.0669V31.4165L24.7707 33.3659C24.5708 33.5759 24.4784 33.8545 24.4993 34.1285L18.3706 36.3569C17.9265 36.5184 17.5139 36.7372 17.1392 37.0021L16.1768 36.521C19.0416 35.274 19.9491 33.5202 19.9927 33.4331C20.1329 33.1527 20.1329 32.8225 19.9927 32.5422C19.2745 31.1059 19.1876 28.4735 19.1177 26.3583C19.0945 25.6541 19.0724 24.9889 19.0303 24.3965C18.6907 19.6187 15.0585 16.0157 10.5814 16.0157C6.10433 16.0157 2.47204 19.6186 2.13257 24.3965C2.09047 24.989 2.06842 25.6543 2.04518 26.3586C1.97532 28.4736 1.8882 31.1058 1.17021 32.542C1.02996 32.8224 1.02996 33.1526 1.17021 33.4329C1.21377 33.5201 2.11942 35.2703 4.9899 36.5187L2.31678 37.8552C0.887719 38.5703 0 40.0066 0 41.6042V48.9632C0 49.5134 0.445984 49.9593 0.996094 49.9593C1.5462 49.9593 1.99219 49.5134 1.99219 48.9632V41.6042C1.99219 40.7659 2.45796 40.0122 3.20769 39.6373L6.53637 37.973L7.69423 39.0734C8.50385 39.8427 9.54245 40.2272 10.5814 40.2272C11.6202 40.2272 12.6593 39.8425 13.4686 39.0734L14.6264 37.9731L15.7117 38.5158C15.2007 39.3335 14.9106 40.2924 14.9106 41.2969V48.9635C14.9106 49.5136 15.3566 49.9596 15.9067 49.9596C16.4568 49.9596 16.9028 49.5136 16.9028 48.9635V41.2969C16.9028 39.9295 17.7662 38.6967 19.0514 38.2293L25.513 35.8798L28.2029 39.9147C28.5467 40.4306 29.0978 40.7614 29.7147 40.8225C29.7835 40.8293 29.8519 40.8326 29.9201 40.8326C30.4644 40.8326 30.9857 40.6184 31.3754 40.2288L33.0164 38.5878V48.9636C33.0164 49.5138 33.4624 49.9597 34.0125 49.9597C34.5626 49.9597 35.0086 49.5138 35.0086 48.9636V38.5878L36.6496 40.2288C37.0392 40.6185 37.5604 40.8327 38.1048 40.8327C38.173 40.8327 38.2415 40.8294 38.3102 40.8226C38.9272 40.7615 39.4783 40.4307 39.8221 39.9149L42.5121 35.88L48.9735 38.2296C50.2586 38.697 51.1222 39.9297 51.1222 41.2972V48.9638C51.1222 49.5139 51.5682 49.9599 52.1183 49.9599C52.6684 49.9599 53.1144 49.5139 53.1144 48.9638V41.2972C53.1144 39.9122 52.5641 38.6133 51.6411 37.6527L51.8872 37.5824C52.1354 37.5115 52.4741 37.4144 52.8141 37.2477L55.3573 39.7909V48.9638C55.3573 49.5139 55.8033 49.9599 56.3534 49.9599C56.9035 49.9599 57.3495 49.5139 57.3495 48.9638V39.7909L59.8751 37.2654C60.0093 37.3337 60.1504 37.3913 60.2989 37.4337L64.4129 38.609C65.3519 38.8773 66.0078 39.7469 66.0078 40.7236V48.9638C66.0078 49.5139 66.4538 49.9599 67.0039 49.9599C67.554 49.9599 68 49.5139 68 48.9638V40.7236C68 38.8618 66.75 37.2044 64.9602 36.693ZM6.39027 34.9336C4.52705 34.2632 3.59245 33.3693 3.19348 32.8812C3.46548 32.1702 3.64185 31.3558 3.76125 30.4961C4.31056 31.8132 5.23056 32.9376 6.39027 33.7397V34.9336ZM12.0966 37.6294C11.247 38.4367 9.91605 38.4365 9.06671 37.6293L8.14034 36.749C8.29666 36.4562 8.38259 36.1241 8.38259 35.7763V34.7146C9.07747 34.9317 9.81617 35.0489 10.5817 35.0489C11.3463 35.0489 12.0846 34.9312 12.7807 34.7153L12.7805 35.7762C12.7805 36.1241 12.8663 36.4563 13.0228 36.7493L12.0966 37.6294ZM10.582 33.0567C7.6075 33.0567 5.18779 30.6368 5.18779 27.6625C5.18779 27.1124 4.7418 26.6664 4.1917 26.6664C4.13591 26.6664 4.08146 26.6721 4.0282 26.681C4.03113 26.5954 4.03391 26.5096 4.03684 26.4247C4.05902 25.7398 4.0804 25.0929 4.11984 24.538C4.24708 22.7482 4.96227 21.0989 6.13368 19.8938C7.31558 18.6777 8.89525 18.0081 10.5817 18.0081C12.2682 18.0081 13.8477 18.6777 15.0297 19.8938C16.2011 21.0989 16.9163 22.7482 17.0436 24.538C17.0829 25.0927 17.1044 25.7395 17.127 26.4243C17.129 26.4831 17.131 26.5428 17.1329 26.602C16.0492 24.9323 14.3755 23.7018 12.2129 23.0069C10.215 22.365 8.49668 22.4047 8.42416 22.4066C8.16332 22.4139 7.91576 22.5231 7.73473 22.7109L5.93752 24.5748C5.55568 24.9708 5.5671 25.6014 5.96315 25.9832C6.3592 26.3651 6.98979 26.3535 7.37163 25.9576L8.86709 24.4067C10.155 24.4697 14.2983 24.9515 15.9097 28.4999C15.5043 31.1147 13.2568 33.0567 10.582 33.0567ZM14.7726 34.9369L14.7727 33.7489C15.9315 32.9511 16.8528 31.8288 17.4026 30.5018C17.522 31.3595 17.6982 32.172 17.9697 32.8815C17.573 33.3649 16.634 34.2667 14.7726 34.9369ZM24.3582 18.7771V16.3057C24.3582 16.1558 24.3243 16.0077 24.2591 15.8726C23.6182 14.5453 23.2932 13.1369 23.2932 11.6866V9.55658C23.2932 5.40766 26.6686 2.03236 30.8174 2.03236H44.732V11.6868C44.732 13.1371 44.4071 14.5454 43.7661 15.8727C43.7009 16.0078 43.667 16.1559 43.667 16.3058V19.1421C43.667 21.8396 42.5826 24.3417 40.6135 26.1874C40.3677 26.4177 40.1126 26.6336 39.8488 26.8348C39.843 26.8388 39.8374 26.8432 39.8317 26.8473C37.987 28.2478 35.7276 28.9285 33.3681 28.7756C28.3158 28.4485 24.3582 24.0567 24.3582 18.7771ZM29.9668 38.82C29.9598 38.8269 29.9438 38.8432 29.9112 38.8397C29.8788 38.8366 29.8661 38.8176 29.8606 38.8093L26.7628 34.1625L27.7597 33.115L32.4592 36.3273L29.9668 38.82ZM34.0126 34.976L28.6184 31.2888V29.4295C30.0142 30.184 31.577 30.6558 33.2391 30.7634C33.5017 30.7804 33.7627 30.7888 34.0228 30.7888C35.9275 30.7888 37.7606 30.3335 39.4068 29.4693V31.2888L34.0126 34.976ZM38.1646 38.8096C38.1592 38.8178 38.1464 38.8368 38.114 38.84C38.0815 38.8441 38.0655 38.827 38.0585 38.8202L35.566 36.3277L40.2656 33.1153L41.2626 34.1628L38.1646 38.8096ZM56.3534 37.9692L54.0929 35.7088C54.1324 35.5297 54.1547 35.3335 54.1546 35.1171L54.1544 34.6968C54.7817 34.9026 55.4428 35.0248 56.127 35.0453C56.2037 35.0477 56.2798 35.0487 56.3563 35.0487C57.1123 35.0487 57.8502 34.9345 58.5525 34.7166V35.1177C58.5525 35.3164 58.5775 35.5111 58.6245 35.6982L56.3534 37.9692ZM60.1097 31.5339C59.054 32.5584 57.6594 33.0995 56.1869 33.054C53.3043 32.9676 50.9592 30.4286 50.9592 27.3945V25.5323C50.9592 25.3776 50.9232 25.2251 50.854 25.0869L50.2387 23.8562C50.0133 23.4053 49.8942 22.9007 49.8942 22.3965V22.3371C49.8942 19.95 51.8363 18.008 54.2234 18.008H62.8127V22.1451C62.8127 22.8137 62.6547 23.4832 62.3557 24.0812L61.8529 25.0869C61.7837 25.2253 61.7477 25.3776 61.7477 25.5323V27.6624C61.7477 29.1339 61.166 30.5088 60.1097 31.5339Z" fill="#BEAD8E"/>
                </svg>

                <svg class="sombra" width="144" height="106" viewBox="0 0 144 106" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M137.563 77.7892L128.851 75.2973C128.475 75.1898 128.212 74.8412 128.212 74.4495V71.5385C128.921 71.0469 129.597 70.4967 130.229 69.8826C133.292 66.907 134.979 62.9159 134.979 58.644V54.627L135.821 52.9407C136.745 51.0894 137.234 49.0169 137.234 46.9474V36.065C137.234 34.8987 136.29 33.9533 135.125 33.9533H114.826C107.445 33.9533 101.44 39.9652 101.44 47.3545V47.4804C101.44 49.2013 101.846 50.9247 102.615 52.4637L103.695 54.6267V58.0758C103.695 63.5421 106.386 68.4466 110.461 71.398L110.462 74.449C110.462 74.9195 110.462 75.1143 108.72 75.6127L104.469 76.8285L92.1727 72.3522C92.2168 71.7713 92.0211 71.1806 91.5978 70.7355L87.6684 66.6027V59.665C88.0838 59.3223 88.4933 58.9704 88.8902 58.5981C93.8472 53.9467 96.6901 47.3796 96.6901 40.5807V35.0401C98.1869 31.7793 98.9454 28.3288 98.9454 24.7752V2.19668C98.9454 1.03045 98.001 0.0849609 96.8361 0.0849609H65.2604C54.1482 0.0849609 45.108 9.1355 45.108 20.2598V24.7757C45.108 28.3293 45.8665 31.7799 47.3633 35.0407V39.8078C47.3633 47.7017 50.8694 54.8134 56.385 59.502V66.603L52.4557 70.7357C52.0324 71.1809 51.8366 71.7716 51.8808 72.3525L38.9025 77.0768C37.962 77.4192 37.0882 77.8829 36.2948 78.4446L34.2568 77.4245C40.3234 74.7809 42.2452 71.0629 42.3374 70.8782C42.6344 70.2838 42.6344 69.5839 42.3374 68.9895C40.8167 65.9447 40.6325 60.3638 40.4845 55.8797C40.4353 54.3868 40.3886 52.9765 40.2995 51.7207C39.5803 41.5918 31.8887 33.9533 22.4077 33.9533C12.9268 33.9533 5.23491 41.5915 4.51603 51.7207C4.42687 52.9767 4.38019 54.3871 4.33097 55.8802C4.18303 60.3641 3.99853 65.9444 2.47809 68.9892C2.18109 69.5836 2.18109 70.2835 2.47809 70.8779C2.57034 71.0626 4.48819 74.7731 10.5668 77.4197L4.90613 80.2531C1.87987 81.769 0 84.8141 0 88.201V103.802C0 104.968 0.944437 105.914 2.10938 105.914C3.27431 105.914 4.21875 104.968 4.21875 103.802V88.201C4.21875 86.4238 5.20509 84.826 6.79275 84.0311L13.8417 80.5028L16.2937 82.8356C18.0082 84.4667 20.2075 85.2818 22.4077 85.2818C24.6074 85.2818 26.8079 84.4661 28.5218 82.8356L30.9735 80.5031L33.2719 81.6536C32.1896 83.3872 31.5754 85.4201 31.5754 87.5495V103.803C31.5754 104.969 32.5198 105.914 33.6847 105.914C34.8497 105.914 35.7941 104.969 35.7941 103.803V87.5495C35.7941 84.6506 37.6225 82.0371 40.3442 81.0463L54.0276 76.0651L59.7237 84.6193C60.4519 85.7129 61.6188 86.4143 62.9252 86.5438C63.0709 86.5581 63.2157 86.5652 63.3603 86.5652C64.5128 86.5652 65.6168 86.111 66.4419 85.2852L69.9171 81.8062V103.803C69.9171 104.969 70.8615 105.915 72.0264 105.915C73.1914 105.915 74.1358 104.969 74.1358 103.803V81.8062L77.6109 85.2852C78.4358 86.1113 79.5398 86.5655 80.6926 86.5655C80.8369 86.5655 80.982 86.5584 81.1274 86.5441C82.4341 86.4145 83.601 85.7132 84.3292 84.6196L90.0256 76.0657L103.709 81.0468C106.43 82.0377 108.259 84.6511 108.259 87.5501V103.803C108.259 104.97 109.203 105.915 110.368 105.915C111.533 105.915 112.478 104.97 112.478 103.803V87.5501C112.478 84.614 111.312 81.8603 109.358 79.8237L109.879 79.6748C110.404 79.5244 111.122 79.3186 111.842 78.9652L117.227 84.3569V103.803C117.227 104.97 118.172 105.915 119.337 105.915C120.502 105.915 121.446 104.97 121.446 103.803V84.3569L126.794 79.0027C127.079 79.1474 127.377 79.2696 127.692 79.3594L136.404 81.8512C138.392 82.42 139.781 84.2634 139.781 86.334V103.803C139.781 104.97 140.726 105.915 141.891 105.915C143.056 105.915 144 104.97 144 103.803V86.334C144 82.3871 141.353 78.8735 137.563 77.7892ZM13.5323 74.0593C9.58669 72.638 7.60753 70.7431 6.76266 69.7083C7.33866 68.2008 7.71216 66.4743 7.965 64.6517C9.12825 67.444 11.0765 69.8277 13.5323 71.5283V74.0593ZM25.6163 79.7745C23.8171 81.4858 20.9987 81.4855 19.2001 79.7742L17.2384 77.908C17.5694 77.2871 17.7514 76.5832 17.7514 75.8458V73.595C19.2229 74.0554 20.7872 74.3037 22.4083 74.3037C24.0275 74.3037 25.5909 74.0542 27.065 73.5964L27.0647 75.8455C27.0647 76.5832 27.2464 77.2874 27.5777 77.9085L25.6163 79.7745ZM22.4089 70.0803C16.11 70.0803 10.9859 64.9502 10.9859 58.6446C10.9859 57.4784 10.0415 56.5329 8.87653 56.5329C8.75841 56.5329 8.64309 56.545 8.53031 56.5639C8.5365 56.3822 8.54241 56.2004 8.54859 56.0204C8.59556 54.5684 8.64084 53.1969 8.72437 52.0206C8.99381 48.2262 10.5083 44.7298 12.989 42.1749C15.4918 39.5969 18.837 38.1773 22.4083 38.1773C25.9796 38.1773 29.3245 39.5969 31.8277 42.1749C34.3083 44.7298 35.8228 48.2262 36.0923 52.0206C36.1755 53.1966 36.2211 54.5679 36.2689 56.0196C36.2731 56.1443 36.2773 56.2707 36.2815 56.3963C33.9865 52.8565 30.4422 50.2478 25.8626 48.7747C21.6318 47.4139 17.993 47.4981 17.8394 47.5021C17.287 47.5175 16.7628 47.749 16.3794 48.1471L12.5736 52.0986C11.765 52.9382 11.7892 54.275 12.6278 55.0845C13.4665 55.894 14.8019 55.8695 15.6105 55.0302L18.7774 51.7424C21.5047 51.8758 30.2788 52.8973 33.6912 60.4198C32.8326 65.9632 28.0732 70.0803 22.4089 70.0803ZM31.2832 74.0663L31.2834 71.5478C33.7373 69.8564 35.6884 67.4772 36.8525 64.6638C37.1053 66.4822 37.4785 68.2048 38.0534 69.7089C37.2133 70.7338 35.2249 72.6456 31.2832 74.0663ZM51.5821 39.8075V34.5682C51.5821 34.2503 51.5104 33.9364 51.3723 33.65C50.015 30.8361 49.3268 27.8504 49.3268 24.7757V20.26C49.3268 11.4643 56.4747 4.30868 65.2604 4.30868H94.7267V24.776C94.7267 27.8507 94.0385 30.8364 92.6812 33.6503C92.5431 33.9366 92.4713 34.2506 92.4713 34.5685V40.5812C92.4713 46.3001 90.1749 51.6044 86.0051 55.5173C85.4845 56.0055 84.9443 56.4633 84.3857 56.8899C84.3733 56.8983 84.3615 56.9076 84.3494 56.9164C80.4431 59.8854 75.6585 61.3285 70.6618 61.0044C59.9628 60.3109 51.5821 51.0002 51.5821 39.8075ZM63.459 82.2984C63.4444 82.313 63.4103 82.3476 63.3414 82.3403C63.2728 82.3336 63.2458 82.2933 63.2343 82.2759L56.6741 72.4245L58.7852 70.2039L68.7372 77.014L63.459 82.2984ZM72.0267 74.1491L60.6037 66.3324V62.3905C63.5594 63.9901 66.8689 64.9904 70.3887 65.2185C70.9447 65.2546 71.4974 65.2723 72.0484 65.2723C76.0818 65.2723 79.9636 64.3071 83.4497 62.475V66.3324L72.0267 74.1491ZM80.8192 82.2764C80.8076 82.2939 80.7806 82.3341 80.712 82.3409C80.6431 82.3496 80.6093 82.3133 80.5944 82.2989L75.3162 77.0149L85.2682 70.2044L87.3796 72.4251L80.8192 82.2764ZM119.337 80.4947L114.55 75.7028C114.633 75.323 114.681 74.9071 114.68 74.4484L114.68 73.5573C116.008 73.9937 117.408 74.2527 118.857 74.2961C119.02 74.3012 119.181 74.3034 119.343 74.3034C120.944 74.3034 122.506 74.0613 123.994 73.5992V74.4495C123.994 74.8708 124.046 75.2835 124.146 75.6803L119.337 80.4947ZM127.291 66.8519C125.056 69.0238 122.102 70.1709 118.984 70.0746C112.88 69.8913 107.914 64.5087 107.914 58.0764V54.1286C107.914 53.8006 107.837 53.4774 107.691 53.1843L106.388 50.5753C105.911 49.6194 105.658 48.5495 105.658 47.4806V47.3548C105.658 42.294 109.771 38.177 114.826 38.177H133.015V46.9476C133.015 48.365 132.681 49.7844 132.047 51.0523L130.983 53.1843C130.836 53.4776 130.76 53.8006 130.76 54.1286V58.6443C130.76 61.764 129.528 64.6788 127.291 66.8519Z" fill="#F8F8F8"/>
                </svg>

                <h4>Strong Team</h4>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
                </p>
            </div>
        </div>

        <div class="img-luxary"> 
            <img src="src/img/imgGris.png" alt="imagen">
        </div>

        <div class="about__luxary">
            <div class="luxary">
                <svg width="57" height="52" viewBox="0 0 57 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M50.9317 4.14007H45.421V2.08444C45.421 1.48371 44.9215 0.996094 44.3063 0.996094C43.691 0.996094 43.1916 1.48371 43.1916 2.08444V4.14007H24.3679V2.08444C24.3679 1.48371 23.8685 0.996094 23.2532 0.996094C22.638 0.996094 22.1385 1.48371 22.1385 2.08444V4.14007H16.2562C12.9063 4.14385 10.1918 6.79378 10.1879 10.0645V28.2017C10.1879 28.8024 10.6874 29.2896 11.3026 29.2896C11.9179 29.2896 12.417 28.8024 12.417 28.2017V21.0678H54.771V45.1294C54.7683 47.1987 53.0511 48.8753 50.9317 48.8775H16.2562C14.1369 48.8753 12.4197 47.1987 12.417 45.1294V38.8418C12.417 38.2411 11.9179 37.7535 11.3026 37.7535C10.6874 37.7535 10.1879 38.2411 10.1879 38.8418V45.1294C10.1918 48.4001 12.9063 51.0504 16.2562 51.0542H50.9317C54.2816 51.0504 56.9961 48.4001 57 45.1294V10.0645C56.9961 6.79378 54.2816 4.14385 50.9317 4.14007ZM12.417 18.8912V10.0645C12.4197 7.99524 14.1369 6.31865 16.2562 6.31638H22.1385V9.27121C20.4601 9.80612 19.4291 11.4528 19.7065 13.1555C19.9839 14.8578 21.4876 16.1107 23.2532 16.1107C25.0189 16.1107 26.5226 14.8578 26.8 13.1555C27.0774 11.4528 26.0464 9.80612 24.3679 9.27121V6.31638H43.1916V9.27121C41.5131 9.80612 40.4821 11.4528 40.7595 13.1555C41.0369 14.8578 42.5406 16.1107 44.3063 16.1107C46.0719 16.1107 47.5756 14.8578 47.853 13.1555C48.1304 11.4528 47.0994 9.80612 45.421 9.27121V6.31638H50.9317C53.0511 6.31865 54.7683 7.99524 54.771 10.0645V18.8912H12.417ZM23.2532 11.2739C24.0057 11.2739 24.6155 11.8693 24.6155 12.604C24.6155 13.3382 24.0057 13.934 23.2532 13.934C22.5012 13.934 21.891 13.3382 21.891 12.604C21.8921 11.8697 22.5016 11.2746 23.2532 11.2739ZM44.3063 11.2739C45.0587 11.2739 45.6686 11.8693 45.6686 12.604C45.6686 13.3382 45.0587 13.934 44.3063 13.934C43.5542 13.934 42.944 13.3382 42.944 12.604C42.9452 11.8697 43.5546 11.2746 44.3063 11.2739Z" fill="#BEAD8E"/>
                    <path d="M7.94584 38.4356C8.38095 38.8608 8.38095 39.5493 7.94584 39.9745C7.51035 40.3997 6.80518 40.3997 6.36968 39.9745L0.548981 34.2915C0.113871 33.8666 0.113871 33.1778 0.548981 32.7529L6.36968 27.0699C6.80518 26.6447 7.51035 26.6447 7.94584 27.0699C8.38095 27.4951 8.38095 28.1836 7.94584 28.6088L4.02792 32.434H25.9814C26.5967 32.434 27.0961 32.9213 27.0961 33.522C27.0961 34.1231 26.5967 34.6104 25.9814 34.6104H4.02792L7.94584 38.4356Z" fill="#BEAD8E"/>
                </svg>

                <h4>Luxury Room</h4>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
                </p>
            </div>
        </div>

    </div>

    <div class="home__rooms">

        <span>Rooms</span>

        <h2>Hand Picked Rooms</h2>

        <div class="swiper__contein">
            <div class="rooms-icons">
                <svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.27273 4.36364C3.59637 4.36364 3.91274 4.26767 4.18184 4.08786C4.45094 3.90805 4.66068 3.65249 4.78453 3.35348C4.90838 3.05448 4.94079 2.72546 4.87765 2.40803C4.81451 2.09061 4.65866 1.79904 4.42981 1.57019C4.20096 1.34134 3.90939 1.18549 3.59197 1.12235C3.27454 1.05921 2.94552 1.09162 2.64652 1.21547C2.34751 1.33932 2.09195 1.54906 1.91214 1.81816C1.73233 2.08726 1.63636 2.40363 1.63636 2.72727C1.63636 3.16126 1.80877 3.57748 2.11564 3.88436C2.42252 4.19124 2.83874 4.36364 3.27273 4.36364ZM3.27273 2.18182C3.38061 2.18182 3.48607 2.21381 3.57577 2.27374C3.66547 2.33368 3.73538 2.41887 3.77666 2.51854C3.81795 2.61821 3.82875 2.72788 3.8077 2.83369C3.78665 2.93949 3.7347 3.03668 3.65842 3.11297C3.58214 3.18925 3.48495 3.2412 3.37914 3.26225C3.27333 3.28329 3.16366 3.27249 3.06399 3.23121C2.96432 3.18992 2.87913 3.12001 2.8192 3.03031C2.75926 2.94061 2.72727 2.83515 2.72727 2.72727C2.72727 2.58261 2.78474 2.44387 2.88703 2.34158C2.98933 2.23929 3.12806 2.18182 3.27273 2.18182ZM10.3636 1.09091H6C5.85534 1.09091 5.7166 1.14838 5.61431 1.25067C5.51201 1.35296 5.45455 1.4917 5.45455 1.63636V4.90909H1.09091V0.545455C1.09091 0.400791 1.03344 0.262053 0.931149 0.15976C0.828857 0.0574675 0.690118 0 0.545455 0C0.400791 0 0.262052 0.0574675 0.15976 0.15976C0.0574673 0.262053 0 0.400791 0 0.545455V7.63636C0 7.78103 0.0574673 7.91977 0.15976 8.02206C0.262052 8.12435 0.400791 8.18182 0.545455 8.18182C0.690118 8.18182 0.828857 8.12435 0.931149 8.02206C1.03344 7.91977 1.09091 7.78103 1.09091 7.63636V6H10.9091V7.63636C10.9091 7.78103 10.9666 7.91977 11.0689 8.02206C11.1711 8.12435 11.3099 8.18182 11.4545 8.18182C11.5992 8.18182 11.7379 8.12435 11.8402 8.02206C11.9425 7.91977 12 7.78103 12 7.63636V2.72727C12 2.29328 11.8276 1.87707 11.5207 1.57019C11.2138 1.26331 10.7976 1.09091 10.3636 1.09091ZM10.9091 4.90909H6.54545V2.18182H10.3636C10.5083 2.18182 10.647 2.23929 10.7493 2.34158C10.8516 2.44387 10.9091 2.58261 10.9091 2.72727V4.90909Z" fill="#222222"/>
                </svg>

                <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.95 6.32047C5.24315 6.32047 4.53629 6.61153 4.07892 7.15207C3.66312 7.65102 2.91469 6.98575 3.33048 6.48679C3.99576 5.73836 4.95209 5.32256 5.95 5.32256C6.94791 5.32256 7.90424 5.73836 8.56952 6.48679C8.98531 6.98575 8.23688 7.65102 7.82108 7.15207C7.36371 6.61153 6.65685 6.32047 5.95 6.32047ZM5.95 9.81316C5.40946 9.81316 4.95209 9.35579 4.95209 8.81525C4.95209 8.27472 5.40946 7.81734 5.95 7.81734C6.49053 7.81734 6.94791 8.27472 6.94791 8.81525C6.94791 9.35579 6.49053 9.81316 5.95 9.81316ZM5.95 3.8257C4.61945 3.8257 3.41364 4.28307 2.45731 5.2394C2.04151 5.6552 1.2515 5.03151 1.75046 4.53255C2.87311 3.4099 4.36997 2.82779 5.95 2.82779C7.53003 2.82779 9.02689 3.4099 10.1495 4.53255C10.6485 5.03151 9.85849 5.6552 9.44269 5.2394C8.48636 4.28307 7.28055 3.8257 5.95 3.8257ZM5.95 1.33092C4.03734 1.33092 2.24941 2.03777 0.877283 3.32674C0.378328 3.78412 -0.328526 3.07726 0.17043 2.61989C1.79204 1.12302 3.78786 0.333008 5.95 0.333008C8.11214 0.333008 10.108 1.12302 11.7296 2.61989C12.2285 3.07726 11.5217 3.78412 11.0227 3.32674C9.65059 2.03777 7.86266 1.33092 5.95 1.33092Z" fill="#222222"/>
                </svg>

                <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.75638 3.28816L1.93336 2.75725H1.63638C1.36851 2.75725 1.15154 2.54028 1.15154 2.2724C1.15154 2.00452 1.36851 1.78755 1.63638 1.78755C1.93335 1.78755 2.2565 1.78755 2.2565 1.78755C2.2565 1.78755 2.48778 1.09374 2.63105 0.664647C2.69699 0.466586 2.8822 0.333008 3.09093 0.333008C4.22232 0.333008 7.77772 0.333008 8.90911 0.333008C9.11784 0.333008 9.30305 0.466586 9.36899 0.664647L9.74354 1.78755H10.3637C10.6315 1.78755 10.8485 2.00452 10.8485 2.2724C10.8485 2.54028 10.6315 2.75725 10.3637 2.75725H10.0667L10.2437 3.28816C10.8703 3.4501 11.3334 4.01931 11.3334 4.69664V9.06028C11.3334 9.32816 11.1164 9.54513 10.8485 9.54513C10.5523 9.54513 10.1751 9.54513 9.87881 9.54513C9.61093 9.54513 9.39396 9.32816 9.39396 9.06028V8.57543H2.60608V9.06028C2.60608 9.32816 2.38911 9.54513 2.12123 9.54513C1.82499 9.54513 1.44778 9.54513 1.15154 9.54513C0.883657 9.54513 0.666687 9.32816 0.666687 9.06028C0.666687 8.1381 0.666687 6.09834 0.666687 4.69664C0.666687 4.01931 1.12972 3.4501 1.75638 3.28816ZM2.60608 5.18149C2.87396 5.18149 3.09093 5.39846 3.09093 5.66634C3.09093 5.93422 2.87396 6.15119 2.60608 6.15119C2.18305 6.15119 1.63638 6.15119 1.63638 6.15119V7.60574H3.27614C3.27614 7.60574 3.84584 6.46658 4.11178 5.93446C4.19396 5.7701 4.36172 5.66634 4.54547 5.66634C5.20826 5.66634 6.79178 5.66634 7.45457 5.66634C7.63832 5.66634 7.80608 5.7701 7.88826 5.93446C8.1542 6.46658 8.7239 7.60574 8.7239 7.60574H10.3637V6.15119H9.39396C9.12608 6.15119 8.90911 5.93422 8.90911 5.66634C8.90911 5.39846 9.12608 5.18149 9.39396 5.18149C9.81699 5.18149 10.3637 5.18149 10.3637 5.18149V4.69664C10.3637 4.42877 10.1467 4.2118 9.87881 4.2118C8.35105 4.2118 3.64899 4.2118 2.12123 4.2118C1.85335 4.2118 1.63638 4.42877 1.63638 4.69664V5.18149H2.60608ZM7.15493 6.63604H4.84511L4.36026 7.60574H7.63978L7.15493 6.63604ZM3.44051 1.3027L2.79396 3.2421H9.20608L8.55954 1.3027H3.44051Z" fill="#222222"/>
                </svg>

                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.832 8.36893L9.40798 7.55243L10.6456 7.00868C10.818 6.93293 10.8974 6.73118 10.8219 6.55818C10.7479 6.39081 10.54 6.30868 10.3712 6.38243L8.67048 7.12956L6.68736 5.99231L8.66098 4.85306L10.381 5.60206C10.5556 5.67731 10.7577 5.59118 10.8299 5.42456C10.9047 5.25156 10.8252 5.05006 10.6529 4.97531L9.39661 4.42831L10.8279 3.60206C10.9069 3.55643 10.9634 3.48268 10.9869 3.39443C11.0104 3.30618 10.9982 3.21418 10.9525 3.13518C10.8615 2.97868 10.6435 2.91918 10.4857 3.01005L9.06411 3.83068L9.21636 2.48743C9.22686 2.3963 9.20111 2.30668 9.14398 2.23493C9.08711 2.16368 9.00598 2.11893 8.91611 2.10905C8.72486 2.08643 8.55736 2.22468 8.53773 2.41105L8.34461 4.25618L6.37498 5.40206V3.12668L7.86561 2.01268C7.93611 1.96093 7.98223 1.88443 7.99548 1.79718C8.00923 1.70605 7.98498 1.61055 7.92923 1.53505C7.82036 1.38743 7.61236 1.35355 7.46311 1.46343L6.37498 2.27505V0.62568C6.37498 0.42443 6.17686 0.28418 5.99898 0.28418C5.82211 0.28418 5.62498 0.42443 5.62498 0.62568V2.26505L4.55336 1.4633C4.40673 1.35443 4.19298 1.38743 4.08386 1.53493C4.02673 1.61193 4.00211 1.70893 4.01598 1.8008C4.02898 1.88668 4.07448 1.9618 4.14311 2.01193L5.62498 3.11618V5.40093L3.68486 4.28018L3.47823 2.4338C3.45761 2.26155 3.31411 2.13168 3.14411 2.13168C3.13048 2.13168 3.11636 2.13243 3.10336 2.13418C2.91886 2.1553 2.78473 2.32468 2.80448 2.5133L2.96223 3.85681L1.50711 3.02218C1.45561 2.99281 1.39711 2.97718 1.33798 2.97718C1.21573 2.97718 1.10223 3.04293 1.04173 3.14893C0.948859 3.3108 1.00498 3.5198 1.16798 3.6153L2.63236 4.45506L1.37823 5.00581C1.29448 5.04256 1.23011 5.10955 1.19723 5.19443C1.16411 5.27943 1.16623 5.37231 1.20286 5.45543C1.27486 5.62143 1.47623 5.70618 1.65273 5.63193L3.36998 4.87793L5.31686 5.99418L3.36586 7.12056L1.66323 6.37893C1.49411 6.30556 1.28686 6.38793 1.21386 6.55581C1.13836 6.72818 1.21761 6.93006 1.39061 7.00606L2.62961 7.54556L1.17686 8.38431C1.01473 8.47931 0.958984 8.68868 1.05261 8.85106C1.11336 8.95631 1.22711 9.02168 1.34886 9.02168C1.40948 9.02168 1.46873 9.00556 1.51911 8.97593L2.98161 8.13156L2.82648 9.49431C2.81648 9.58518 2.84236 9.67443 2.89961 9.74593C2.95661 9.81706 3.03786 9.86193 3.12536 9.87143C3.13873 9.87331 3.15311 9.87368 3.16736 9.87368C3.34111 9.87368 3.48686 9.74343 3.50648 9.56968L3.70198 7.70618L5.62498 6.58781V8.85781L4.30448 9.96243C4.16348 10.0806 4.14748 10.2962 4.26773 10.4416C4.33098 10.5199 4.43111 10.5667 4.53561 10.5667C4.62998 10.5667 4.69336 10.5262 4.74073 10.4886L5.62498 9.74693V11.3734C5.62498 11.5747 5.82211 11.7149 5.99898 11.7149C6.17686 11.7149 6.37498 11.5747 6.37498 11.3734V9.73593L7.27286 10.4901C7.42236 10.6104 7.62461 10.5819 7.73923 10.4431C7.79673 10.3739 7.82711 10.2881 7.82461 10.2009C7.82198 10.1063 7.78098 10.0214 7.70973 9.96206L6.37498 8.84656V6.58243L8.33848 7.71693L8.54673 9.58068C8.56736 9.75256 8.71123 9.88218 8.88161 9.88218C8.89773 9.88218 8.90773 9.88131 8.91873 9.87968C9.00873 9.86981 9.08948 9.82506 9.14611 9.75406C9.20336 9.68231 9.22911 9.59243 9.21848 9.50106L9.05986 8.14018L10.4922 8.96156C10.5436 8.99118 10.6024 9.00681 10.6621 9.00681C10.7845 9.00681 10.898 8.94093 10.9581 8.83493C11.0512 8.67243 10.995 8.46331 10.832 8.36893Z" fill="#222222"/>
                </svg>

                <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.05095 4.17525L9.03992 6.47828M6.19117 1.50942L4.79503 0.703356C4.62981 0.607961 4.41853 0.664573 4.32313 0.829801L1.7898 5.21766C1.6944 5.38291 1.75102 5.59417 1.91625 5.68956L3.31238 6.49562C3.47761 6.59102 3.68888 6.53442 3.78428 6.36918L6.31762 1.98132C6.41301 1.81609 6.3564 1.60481 6.19117 1.50942ZM12.1746 4.96396L10.7785 4.1579C10.6132 4.0625 10.402 4.11912 10.3066 4.28435L7.77325 8.67221C7.67785 8.83745 7.73445 9.04871 7.89969 9.14411L9.29583 9.95017C9.46107 10.0456 9.67233 9.98897 9.76773 9.82372L12.3011 5.43586C12.3965 5.27063 12.3399 5.05936 12.1746 4.96396ZM0.869696 3.35679L2.25151 0.963407C2.34691 0.798179 2.55819 0.741567 2.72341 0.836961L3.62093 1.35514C3.78616 1.45054 3.84277 1.66181 3.74738 1.82704L2.36556 4.22042C2.27016 4.38567 2.05889 4.44226 1.89366 4.34687L0.996141 3.82869C0.830914 3.73329 0.774293 3.52203 0.869696 3.35679ZM11.8394 9.69012L13.2212 7.29674C13.3166 7.13151 13.26 6.92024 13.0947 6.82484L12.1972 6.30666C12.032 6.21126 11.8207 6.26788 11.7253 6.4331L10.3435 8.82648C10.2481 8.99173 10.3047 9.20298 10.4699 9.29838L11.3675 9.81656C11.5327 9.91197 11.7439 9.85536 11.8394 9.69012Z" stroke="#222222" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.33333 7.66667V10.3333M9.66667 2.33333V2.66667C9.66667 3.02029 9.80714 3.35943 10.0572 3.60948C10.3072 3.85952 10.6464 4 11 4C11.3536 4 11.6928 4.14048 11.9428 4.39052C12.1929 4.64057 12.3333 4.97971 12.3333 5.33333V5.66667M1 1L13 13M10.3333 10.3333H1.66667C1.48986 10.3333 1.32029 10.2631 1.19526 10.1381C1.07024 10.013 1 9.84348 1 9.66667V8.33333C1 8.15652 1.07024 7.98695 1.19526 7.86193C1.32029 7.7369 1.48986 7.66667 1.66667 7.66667H7.66667M10.3333 7.66667H12.3333C12.5101 7.66667 12.6797 7.7369 12.8047 7.86193C12.9298 7.98695 13 8.15652 13 8.33333V9.66667C13 9.85333 12.9233 10.022 12.8 10.1427L10.3333 7.66667Z" stroke="#222222" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                <svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.36002 9.87301L1.88669 4.99301H10.8334L6.36002 9.87301ZM6.36002 9.87301C6.36002 10.2797 6.36002 13.533 6.36002 13.533M4.73335 13.533H7.98669M3.51335 6.61967H9.20669M3.10669 2.95967L5.95335 6.61967M0.666687 4.17967L5.14002 1.33301H1.88669L0.666687 4.17967Z" stroke="#222222" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>

            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <img src="src/img/imgGris.png" />
                    </div>

                    <div class="swiper-slide">
                        <img src="src/img/imgGris.png" />
                    </div>

                    <div class="swiper-slide">
                        <img src="src/img/imgGris.png" />
                    </div>

                    <div class="swiper-slide">
                        <img src="src/img/imgGris.png" />
                    </div>

                </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

        </div>

        <div class="duplex__rooms">
            <div class="rooms">
                <h3>Minimal Duplex Room</h3>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                </p>

                <span>$345<span class="rooms-price">/Night</span></span>
            </div>
        </div>

    </div>

    <div class="home__intro">
        <div class="intro">
            <span>Intro video</span>

            <h2>Meet With Our Luxury Place.</h2>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed 
                do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                nisi ut aliquip ex ea commodo consequat you have to understand this.
            </p>

            <button class="btn-desktop">Book Now</button>
        </div>

        <div class="video">
            <!-- <iframe src="https://www.youtube.com/embed/Bu3Doe45lcU?start=25&end=85&autoplay=1&mute=1"
            title="Hotel Miranda" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture;" allowfullscreen>
            </iframe> -->
            
            <video src="src/vid/hotel.mp4" type="video/mp4" controls autoplay muted></video>
        </div>

        <button class="btn-mobile">Book Now</button>
    </div>

    <div class="home__facilities">
        
        <h5>Facilities</h5>

        <h2>Core Features</h2>

        <!-- Swiper -->
        <div class="swiper DataSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img class="number" src="src/img/icons/n1.svg" alt="01">

                    <img class="icon" src="src/img/icons/01.svg" alt="Rating">

                    <h4>Have High Rating</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>

                <div class="swiper-slide">
                    <img class="number" src="src/img/icons/n2.svg" alt="02">

                    <img class="icon" src="src/img/icons/02.svg" alt="quiet hours">

                    <h4>Quiet Hours</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>

                <div class="swiper-slide">
                    <img class="number" src="src/img/icons/n3.svg" alt="03">

                    <img class="icon" src="src/img/icons/03.svg" alt="Locations">

                    <h4>Best Locations</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>

                <div class="swiper-slide">
                    <img class="number" src="src/img/icons/n4.svg" alt="04">

                    <img class="icon" src="src/img/icons/04.svg" alt="Cancellation">

                    <h4>Free Cancellation</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>

                <div class="swiper-slide">
                    <img class="number" src="src/img/icons/n5.svg" alt="05">

                    <img class="icon" src="src/img/icons/05.svg" alt="Payment Options">

                    <h4>Payment Options</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>

                <div class="swiper-slide">
                    <img class="number" src="src/img/icons/n6.svg" alt="06">

                    <img class="icon" src="src/img/icons/06.svg" alt="Special Offers">

                    <h4>Special Offers</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>

        <div class="icon-dona">
            <img src="src/img/icons/dona.svg" alt="dona">
        </div>
    </div>

    <div class="home__menu">

        <h4>Menu</h4>
        <h2>Our Foods Menu</h2>

        <div class="page1">
            <div class="menu__content">

                <div class="menu__img">
                    <img src="src/img/menu.png" alt="menu">
                </div>

                <div>
                    <h3>Eggs & Bacon</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                    </p>
                </div>
            </div>

            <div class="menu__content">

                <div class="menu__img">
                    <img src="src/img/menu.png" alt="menu">
                </div>

                <div>
                    <h3>Tea or Coffee</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                    </p>
                </div>
            </div>

            <div class="menu__content">

                <div class="menu__img">
                    <img src="src/img/menu.png" alt="menu">
                </div>

                <div>
                    <h3>Chia Oatmeal</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                    </p>
                </div>
            </div>
        </div>

        <div class="page2">
            <div class="menu__content">

                <div class="menu__img">
                    <img src="src/img/menu.png" alt="menu">
                </div>

                <div>
                    <h3>Fruit Parfait</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                    </p>
                </div>
            </div>

            <div class="menu__content">

                <div class="menu__img">
                    <img src="src/img/menu.png" alt="menu">
                </div>

                <div>
                    <h3>Marmalade Selection</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                    </p>
                </div>
            </div>

            <div class="menu__content">

                <div class="menu__img">
                    <img src="src/img/menu.png" alt="menu">
                </div>

                <div>
                    <h3>Cheese Plate</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                    </p>
                </div>
            </div>
        </div>

        <div class="buttons">
            <button class="btn-prev"><</button>
            <button class="btn-next">></button>
        </div>

        <!-- Swiper -->
        <div class="swiper MenuSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="src/img/swiperMenu.png" alt="sMenu">
                </div>

                <div class="swiper-slide">
                    <img src="src/img/swiperMenu.png" alt="sMenu">
                </div>

                <div class="swiper-slide">
                    <img src="src/img/swiperMenu.png" alt="sMenu">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <div class="home__follows">
        <div class="follows">
            <img src="src/img/icons/rocket.svg" alt="rocket">
            <h2>84k<span>+</span></h2>
            <p>Projects are Completed</p>
        </div>

        <div class="follows">
            <img src="src/img/icons/people.svg" alt="people">
            <h2>10M<span>+</span></h2>
            <p>Active Backers Around World</p>
        </div>

        <div class="follows">
            <img src="src/img/icons/finance.svg" alt="finance">
            <h2>02k<span>+</span></h2>
            <p>Categories Served</p>
        </div>

        <div class="follows">
            <img src="src/img/icons/book.svg" alt="book">
            <h2>100M<span>+</span></h2>
            <p>Idea Raised Funds</p>
        </div>

    </div>

</div>

<?php include 'includes/footer.php'; ?>