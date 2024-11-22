<?php

class DataProvider
{
    public static function oneToNine(int $number = 100): array
    {
        $method = 1;
        if ($number > 2 && $number < 9999) {
            $method = 10 ** floor(log10($number));
        }
        return call_user_func(__METHOD__ . $method);
    }

    public static function oneToNineNine(int $number = 1): array
    {
        $method = 1;
        if ($number > 2 && $number < 99) {
            $method = 10 ** floor(log10($number));
        }
        return call_user_func(__METHOD__ . $method);
    }

    public static function oneToNineNineNine(int $number = 1): array
    {
        $method = 1;
        if ($number > 2 && $number < 99) {
            $method = 10 ** floor(log10($number));
        }
        return call_user_func(__METHOD__ . $method);
    }

    private static function oneToNine1(): array
    {
        return [[2, 8, 1, 7, 4, 5, 6, 9, 3]];
    }

    private static function oneToNineNine1(): array
    {
        return [[42, 18, 75, 63, 39, 23, 59, 88, 21, 9, 48, 97, 16, 85, 74, 36, 32, 13, 67, 7, 25, 53, 6, 45, 4, 46, 99, 19, 2, 37, 60, 94, 38, 3, 84, 57, 81, 70, 22, 31, 12, 90, 15, 5, 33, 64, 50, 8, 71, 52, 26, 11, 96, 92, 80, 73, 28, 34, 29, 58, 98, 24, 1, 76, 68, 27, 49, 14, 44, 10, 65, 86, 78, 43, 41, 55, 83, 93, 61, 35, 17, 30, 62, 66, 87, 79, 20, 56, 95, 91, 40, 82, 77, 51, 72, 47, 89, 54]];
    }

    private static function oneToNineNineNine1(): array
    {
        return [[226, 496, 175, 325, 738, 806, 204, 755, 157, 746, 263, 186, 687, 688, 864, 502, 971, 684, 58, 718, 516, 615, 174, 769, 859, 100, 109, 52, 835, 507, 301, 405, 419, 599, 437, 860, 674, 539, 647, 967, 606, 646, 752, 917, 399, 475, 310, 529, 474, 382, 308, 740, 184, 376, 479, 949, 281, 972, 337, 913, 467, 332, 973, 159, 361, 853, 409, 194, 928, 901, 53, 485, 771, 890, 423, 716, 271, 553, 13, 121, 268, 483, 898, 76, 133, 29, 333, 545, 753, 936, 580, 45, 503, 302, 384, 374, 93, 532, 148, 253, 193, 873, 505, 748, 449, 360, 32, 571, 498, 979, 367, 398, 588, 65, 997, 974, 546, 824, 283, 122, 966, 816, 165, 231, 952, 508, 569, 154, 240, 834, 749, 506, 430, 427, 946, 70, 706, 999, 381, 923, 71, 625, 773, 808, 180, 803, 471, 857, 603, 315, 984, 101, 120, 68, 852, 652, 189, 522, 329, 163, 314, 94, 839, 63, 697, 363, 179, 353, 585, 725, 250, 658, 354, 767, 602, 786, 26, 97, 618, 22, 334, 372, 741, 908, 572, 715, 249, 31, 579, 386, 985, 736, 565, 355, 896, 380, 5, 854, 810, 547, 915, 742, 79, 881, 373, 764, 549, 220, 573, 929, 818, 19, 364, 877, 36, 787, 648, 728, 530, 391, 550, 809, 941, 14, 720, 350, 709, 460, 595, 379, 563, 719, 404, 296, 368, 671, 212, 815, 950, 72, 906, 691, 16, 142, 126, 665, 515, 989, 517, 247, 887, 172, 115, 80, 366, 341, 177, 99, 995, 463, 948, 668, 407, 641, 335, 784, 961, 137, 59, 629, 15, 457, 792, 519, 826, 634, 983, 511, 780, 272, 783, 590, 150, 660, 621, 17, 203, 145, 149, 258, 669, 951, 305, 605, 328, 30, 888, 110, 89, 562, 685, 464, 108, 614, 724, 254, 295, 25, 678, 593, 744, 421, 932, 790, 707, 447, 520, 234, 117, 798, 561, 349, 420, 785, 823, 35, 878, 357, 495, 956, 469, 260, 556, 791, 73, 998, 761, 942, 371, 611, 680, 518, 662, 638, 765, 608, 830, 147, 875, 242, 201, 817, 633, 23, 450, 991, 453, 616, 884, 8, 804, 512, 757, 964, 847, 900, 47, 88, 871, 167, 879, 922, 461, 975, 645, 914, 402, 223, 574, 389, 661, 555, 666, 732, 694, 241, 118, 340, 692, 207, 243, 395, 326, 613, 311, 322, 317, 406, 933, 841, 432, 737, 135, 962, 345, 365, 410, 795, 682, 902, 199, 497, 482, 292, 233, 356, 221, 768, 401, 624, 977, 731, 67, 540, 377, 667, 659, 348, 643, 905, 510, 351, 219, 954, 441, 38, 370, 141, 140, 347, 837, 445, 383, 277, 359, 891, 211, 861, 20, 160, 448, 388, 570, 760, 869, 494, 895, 557, 938, 284, 904, 889, 452, 237, 132, 378, 171, 814, 294, 870, 225, 730, 477, 330, 12, 499, 278, 269, 75, 182, 297, 66, 893, 883, 776, 196, 672, 128, 591, 774, 9, 849, 362, 61, 626, 162, 418, 825, 113, 192, 176, 411, 807, 27, 739, 710, 299, 801, 564, 104, 86, 37, 921, 851, 298, 112, 291, 78, 62, 513, 735, 866, 819, 116, 673, 779, 693, 531, 960, 612, 696, 723, 230, 187, 584, 596, 213, 592, 533, 188, 970, 130, 583, 828, 270, 425, 604, 206, 528, 41, 408, 622, 640, 500, 663, 690, 509, 257, 255, 77, 385, 924, 103, 802, 279, 631, 4, 944, 544, 947, 514, 195, 863, 536, 266, 727, 181, 805, 1, 836, 42, 713, 813, 161, 313, 701, 872, 833, 232, 554, 274, 567, 609, 930, 244, 456, 85, 865, 321, 392, 842, 695, 6, 812, 976, 200, 683, 252, 822, 480, 990, 394, 466, 51, 601, 758, 144, 342, 794, 44, 431, 49, 747, 589, 396, 700, 209, 202, 676, 703, 527, 426, 156, 843, 577, 733, 397, 568, 245, 968, 375, 488, 832, 535, 446, 262, 848, 170, 125, 319, 168, 82, 575, 541, 793, 433, 523, 216, 918, 123, 551, 324, 559, 534, 60, 542, 87, 558, 868, 722, 309, 653, 681, 844, 650, 566, 487, 937, 92, 54, 131, 57, 224, 153, 992, 894, 439, 84, 598, 762, 320, 438, 55, 524, 129, 856, 955, 912, 800, 636, 358, 275, 934, 772, 96, 139, 282, 670, 236, 756, 655, 387, 770, 288, 102, 712, 978, 721, 759, 286, 393, 782, 323, 264, 811, 586, 628, 745, 307, 293, 276, 289, 963, 610, 982, 657, 107, 50, 909, 958, 166, 344, 138, 21, 959, 412, 775, 151, 846, 726, 714, 400, 632, 443, 699, 422, 478, 829, 679, 338, 81, 106, 403, 235, 210, 910, 911, 183, 704, 429, 838, 454, 969, 654, 543, 788, 304, 40, 743, 537, 664, 578, 996, 920, 799, 306, 587, 504, 689, 134, 675, 789, 465, 594, 994, 95, 711, 501, 777, 442, 248, 343, 552, 146, 698, 91, 750, 867, 754, 34, 582, 3, 339, 993, 208, 280, 198, 481, 256, 988, 493, 436, 576, 417, 751, 708, 980, 781, 173, 538, 265, 434, 686, 459, 490, 39, 415, 267, 10, 957, 83, 897, 965, 24, 285, 734, 164, 458, 940, 136, 470, 600, 169, 11, 273, 222, 945, 903, 489, 440, 927, 64, 656, 191, 840, 486, 892, 158, 876, 336, 56, 916, 119, 729, 630, 850, 926, 190, 637, 327, 312, 114, 548, 797, 702, 111, 472, 617, 882, 953, 468, 899, 623, 642, 127, 215, 627, 105, 476, 886, 48, 925, 907, 69, 620, 581, 931, 28, 820, 635, 880, 214, 205, 525, 705, 346, 619, 43, 484, 227, 885, 981, 246, 639, 217, 33, 416, 827, 352, 152, 821, 649, 46, 7, 607, 413, 935, 521, 316, 858, 185, 18, 197, 644, 390, 303, 178, 218, 238, 831, 229, 845, 290, 763, 778, 331, 677, 414, 424, 939, 98, 943, 318, 428, 986, 855, 451, 455, 435, 862, 717, 90, 369, 2, 155, 597, 124, 526, 651, 287, 261, 473, 251, 228, 239, 492, 143, 766, 259, 874, 300, 560, 919, 796, 491, 462, 74, 444, 987];
    }

    private static function oneToNine10(): array
    {
        return [[1, 4, 9, 5, 2, 3, 8, 6, 7], [7, 3, 1, 9, 5, 6, 8, 4, 2], [5, 8, 1, 9, 3, 4, 7, 2, 6], [9, 6, 1, 7, 4, 8, 3, 5, 2], [2, 6, 1, 9, 4, 5, 8, 7, 3], [2, 9, 3, 8, 6, 7, 5, 4, 1], [6, 7, 1, 8, 5, 9, 2, 3, 4], [4, 9, 8, 2, 7, 6, 5, 1, 3], [7, 8, 2, 6, 3, 4, 5, 1, 9], [5, 9, 3, 7, 2, 1, 6, 4, 8]];
    }

    private static function oneToNine100(): array
    {
        return [[1, 3, 2, 5, 4, 7, 6, 9, 8], [1, 4, 3, 7, 2, 5, 8, 9, 6], [5, 9, 3, 4, 7, 8, 2, 1, 6], [2, 4, 9, 8, 3, 1, 5, 6, 7], [1, 3, 2, 8, 4, 9, 7, 5, 6], [6, 9, 3, 5, 8, 4, 7, 1, 2], [8, 9, 7, 6, 3, 2, 4, 5, 1], [1, 7, 6, 5, 9, 2, 4, 3, 8], [4, 6, 1, 8, 9, 2, 3, 7, 5], [6, 5, 2, 8, 9, 1, 3, 7, 4], [5, 9, 2, 3, 6, 7, 4, 1, 8], [8, 4, 1, 7, 5, 9, 6, 3, 2], [7, 6, 4, 9, 8, 1, 5, 2, 3], [8, 6, 9, 3, 7, 5, 2, 1, 4], [1, 6, 3, 9, 8, 7, 5, 4, 2], [6, 4, 8, 2, 5, 3, 1, 7, 9], [1, 4, 9, 2, 3, 8, 7, 5, 6], [3, 1, 7, 6, 5, 9, 2, 8, 4], [1, 8, 9, 2, 5, 7, 4, 3, 6], [8, 6, 5, 3, 9, 1, 7, 4, 2], [7, 9, 3, 8, 4, 1, 5, 2, 6], [7, 4, 9, 1, 2, 8, 6, 5, 3], [7, 2, 4, 3, 8, 1, 9, 6, 5], [3, 7, 2, 1, 9, 8, 5, 4, 6], [4, 5, 1, 6, 3, 7, 2, 8, 9], [8, 7, 1, 6, 4, 3, 2, 5, 9], [1, 3, 5, 6, 7, 8, 9, 4, 2], [2, 7, 8, 3, 5, 9, 6, 1, 4], [4, 6, 9, 5, 2, 3, 7, 8, 1], [9, 8, 7, 3, 5, 4, 1, 2, 6], [7, 3, 9, 4, 5, 8, 2, 6, 1], [2, 6, 8, 9, 3, 1, 4, 5, 7], [5, 7, 8, 4, 9, 2, 1, 6, 3], [8, 2, 9, 7, 5, 4, 3, 1, 6], [9, 6, 4, 1, 5, 3, 7, 2, 8], [9, 2, 5, 6, 3, 1, 7, 8, 4], [5, 3, 1, 7, 6, 4, 9, 8, 2], [1, 5, 3, 8, 2, 6, 9, 7, 4], [2, 7, 6, 1, 3, 4, 9, 5, 8], [2, 9, 5, 7, 6, 8, 1, 3, 4], [3, 1, 5, 6, 2, 8, 9, 4, 7], [3, 1, 8, 4, 7, 5, 9, 2, 6], [8, 2, 1, 4, 5, 9, 7, 6, 3], [4, 6, 3, 5, 2, 1, 8, 7, 9], [1, 7, 2, 3, 5, 8, 9, 4, 6], [1, 3, 2, 4, 8, 7, 5, 6, 9], [5, 7, 1, 8, 6, 2, 4, 9, 3], [8, 5, 3, 4, 6, 7, 2, 9, 1], [9, 7, 4, 3, 5, 1, 6, 2, 8], [9, 3, 1, 6, 8, 4, 5, 7, 2], [6, 9, 3, 2, 7, 1, 8, 4, 5], [9, 6, 4, 3, 2, 5, 8, 1, 7], [6, 1, 5, 7, 9, 3, 8, 4, 2], [3, 2, 4, 8, 1, 9, 5, 6, 7], [7, 8, 5, 2, 3, 6, 9, 4, 1], [4, 9, 5, 2, 8, 7, 1, 6, 3], [5, 4, 7, 2, 1, 9, 3, 6, 8], [1, 8, 6, 2, 9, 5, 4, 7, 3], [4, 7, 3, 5, 9, 8, 1, 2, 6], [4, 1, 7, 6, 3, 2, 5, 8, 9], [2, 7, 6, 8, 4, 5, 9, 1, 3], [5, 2, 7, 3, 6, 4, 1, 9, 8], [3, 5, 2, 6, 1, 7, 8, 4, 9], [4, 9, 3, 5, 2, 1, 8, 6, 7], [9, 2, 7, 6, 8, 1, 5, 4, 3], [6, 1, 9, 7, 5, 3, 8, 4, 2], [8, 9, 4, 2, 7, 5, 1, 3, 6], [4, 3, 9, 7, 1, 6, 8, 2, 5], [1, 2, 8, 6, 3, 9, 4, 5, 7], [5, 7, 4, 9, 3, 6, 1, 8, 2], [1, 4, 8, 9, 3, 5, 7, 6, 2], [5, 8, 4, 3, 7, 2, 6, 9, 1], [4, 6, 8, 2, 5, 1, 7, 3, 9], [3, 5, 7, 6, 2, 4, 1, 8, 9], [7, 2, 6, 5, 9, 4, 8, 3, 1], [7, 4, 3, 8, 2, 9, 5, 6, 1], [7, 8, 9, 3, 4, 2, 5, 1, 6], [1, 9, 2, 7, 3, 8, 5, 6, 4], [4, 5, 7, 2, 8, 3, 1, 9, 6], [3, 4, 7, 8, 1, 9, 5, 6, 2], [2, 3, 9, 6, 8, 5, 1, 7, 4], [5, 2, 9, 8, 3, 1, 4, 6, 7], [5, 8, 6, 1, 4, 7, 2, 9, 3], [1, 5, 7, 2, 3, 4, 8, 9, 6], [4, 7, 5, 1, 6, 9, 3, 2, 8], [4, 7, 2, 3, 9, 8, 1, 6, 5], [4, 6, 1, 8, 7, 2, 5, 9, 3], [6, 3, 4, 8, 7, 5, 1, 2, 9], [9, 5, 7, 4, 1, 8, 6, 3, 2], [1, 3, 6, 4, 7, 5, 8, 2, 9], [5, 3, 2, 1, 8, 4, 6, 7, 9], [8, 9, 7, 1, 6, 4, 3, 5, 2], [3, 1, 6, 5, 4, 7, 9, 2, 8], [4, 1, 8, 9, 6, 2, 7, 5, 3], [2, 7, 9, 3, 1, 4, 8, 5, 6], [1, 6, 3, 7, 8, 5, 9, 4, 2], [3, 9, 5, 4, 1, 6, 7, 8, 2], [7, 5, 2, 9, 4, 6, 3, 1, 8], [5, 2, 3, 7, 8, 9, 4, 6, 1], [6, 4, 5, 7, 1, 3, 2, 8, 9]];
    }

    private static function oneToNine1000(): array
    {
        return [[3, 5, 7, 6, 1, 8, 2, 4, 9], [4, 7, 9, 1, 8, 2, 3, 5, 6], [4, 3, 8, 1, 9, 7, 6, 5, 2], [5, 3, 4, 2, 7, 1, 6, 9, 8], [7, 2, 5, 1, 3, 4, 6, 8, 9], [6, 8, 9, 1, 5, 7, 3, 4, 2], [4, 6, 7, 5, 8, 2, 9, 1, 3], [7, 6, 3, 9, 5, 4, 2, 8, 1], [5, 8, 2, 9, 7, 1, 3, 4, 6], [2, 4, 6, 8, 7, 3, 9, 1, 5], [2, 6, 7, 1, 4, 3, 5, 8, 9], [8, 1, 4, 7, 3, 2, 5, 6, 9], [3, 2, 5, 4, 1, 7, 9, 6, 8], [6, 4, 5, 2, 8, 1, 7, 3, 9], [3, 8, 7, 9, 2, 6, 1, 5, 4], [8, 7, 6, 1, 3, 4, 2, 5, 9], [9, 1, 7, 4, 3, 6, 8, 5, 2], [8, 7, 2, 4, 3, 9, 1, 5, 6], [4, 1, 3, 2, 8, 6, 9, 5, 7], [6, 5, 1, 8, 2, 9, 4, 3, 7], [9, 4, 1, 5, 8, 2, 7, 6, 3], [7, 2, 3, 6, 9, 1, 5, 8, 4], [5, 6, 7, 9, 8, 1, 4, 3, 2], [3, 8, 5, 7, 9, 6, 4, 1, 2], [3, 6, 5, 7, 9, 1, 4, 8, 2], [6, 3, 2, 8, 5, 1, 4, 9, 7], [9, 6, 1, 4, 3, 5, 7, 8, 2], [1, 9, 4, 5, 7, 3, 2, 8, 6], [5, 6, 9, 7, 4, 2, 8, 1, 3], [7, 6, 1, 5, 4, 3, 2, 8, 9], [9, 4, 7, 8, 2, 1, 3, 5, 6], [6, 1, 3, 8, 4, 9, 2, 5, 7], [1, 8, 6, 2, 7, 5, 9, 3, 4], [3, 9, 1, 6, 7, 4, 2, 8, 5], [5, 6, 3, 1, 4, 8, 9, 2, 7], [9, 5, 8, 7, 2, 1, 6, 4, 3], [2, 5, 8, 4, 3, 6, 9, 1, 7], [2, 3, 9, 8, 1, 6, 4, 5, 7], [2, 3, 7, 6, 9, 5, 4, 1, 8], [6, 2, 1, 3, 4, 5, 9, 7, 8], [7, 2, 1, 5, 4, 9, 6, 3, 8], [9, 7, 8, 2, 1, 5, 3, 6, 4], [9, 7, 1, 8, 3, 6, 2, 5, 4], [9, 4, 3, 6, 2, 7, 5, 1, 8], [2, 7, 5, 6, 9, 1, 4, 3, 8], [7, 4, 8, 5, 2, 6, 3, 1, 9], [1, 3, 2, 6, 5, 7, 9, 4, 8], [6, 4, 1, 2, 7, 5, 9, 8, 3], [5, 4, 6, 8, 1, 9, 2, 3, 7], [5, 3, 6, 9, 8, 1, 7, 2, 4], [8, 5, 9, 1, 4, 6, 3, 7, 2], [7, 4, 8, 1, 9, 3, 5, 2, 6], [3, 2, 9, 5, 4, 7, 8, 1, 6], [4, 9, 5, 1, 3, 6, 2, 8, 7], [6, 7, 4, 3, 9, 2, 8, 1, 5], [2, 6, 8, 9, 5, 3, 1, 7, 4], [4, 6, 8, 2, 5, 3, 9, 7, 1], [6, 4, 8, 2, 3, 1, 5, 9, 7], [7, 9, 4, 5, 1, 3, 8, 6, 2], [6, 5, 9, 1, 2, 4, 3, 7, 8], [9, 5, 3, 2, 8, 1, 4, 7, 6], [3, 2, 5, 9, 1, 8, 4, 6, 7], [1, 4, 2, 5, 8, 9, 7, 6, 3], [6, 4, 2, 8, 1, 5, 3, 9, 7], [6, 2, 8, 4, 1, 3, 7, 5, 9], [9, 7, 4, 5, 3, 1, 6, 2, 8], [5, 6, 1, 2, 4, 8, 3, 9, 7], [8, 6, 7, 4, 1, 9, 2, 3, 5], [2, 3, 7, 5, 4, 6, 9, 1, 8], [4, 7, 3, 8, 2, 6, 1, 5, 9], [6, 9, 7, 3, 1, 8, 5, 2, 4], [2, 8, 1, 4, 3, 7, 5, 6, 9], [3, 9, 7, 2, 1, 8, 4, 6, 5], [7, 4, 9, 2, 1, 6, 8, 5, 3], [8, 3, 6, 4, 1, 9, 7, 5, 2], [5, 1, 7, 8, 3, 2, 9, 4, 6], [1, 5, 6, 3, 4, 8, 7, 2, 9], [6, 3, 1, 2, 7, 9, 4, 5, 8], [6, 8, 2, 4, 7, 3, 5, 9, 1], [5, 3, 8, 1, 4, 6, 9, 7, 2], [6, 3, 9, 2, 1, 7, 4, 8, 5], [3, 1, 5, 6, 8, 7, 9, 2, 4], [7, 3, 8, 2, 1, 6, 9, 4, 5], [1, 5, 4, 9, 8, 7, 2, 3, 6], [5, 8, 2, 9, 6, 4, 3, 7, 1], [2, 1, 9, 4, 7, 5, 6, 3, 8], [3, 1, 4, 6, 5, 8, 7, 2, 9], [8, 3, 2, 9, 5, 4, 1, 6, 7], [2, 6, 3, 7, 4, 5, 1, 8, 9], [2, 8, 6, 7, 3, 5, 4, 9, 1], [4, 2, 5, 9, 8, 1, 7, 6, 3], [7, 9, 3, 2, 6, 4, 8, 5, 1], [9, 5, 1, 6, 2, 7, 4, 8, 3], [4, 6, 8, 5, 3, 1, 7, 2, 9], [1, 3, 9, 4, 5, 2, 8, 7, 6], [2, 3, 1, 4, 7, 6, 5, 9, 8], [6, 1, 7, 4, 2, 3, 5, 8, 9], [4, 2, 8, 5, 3, 6, 1, 7, 9], [5, 7, 2, 6, 8, 9, 3, 4, 1], [2, 8, 1, 3, 9, 5, 7, 6, 4], [6, 1, 2, 4, 8, 3, 9, 5, 7], [9, 4, 5, 1, 7, 6, 3, 8, 2], [7, 1, 9, 2, 8, 4, 3, 6, 5], [5, 6, 7, 4, 3, 2, 9, 8, 1], [4, 2, 8, 6, 1, 3, 5, 7, 9], [3, 8, 9, 7, 1, 2, 4, 6, 5], [1, 3, 7, 6, 8, 5, 9, 4, 2], [6, 2, 9, 7, 4, 1, 5, 8, 3], [2, 3, 4, 9, 6, 5, 1, 7, 8], [2, 4, 6, 3, 9, 1, 5, 7, 8], [4, 7, 1, 3, 6, 8, 2, 5, 9], [2, 3, 8, 4, 6, 9, 7, 5, 1], [9, 4, 5, 7, 2, 1, 6, 3, 8], [1, 9, 5, 8, 6, 4, 3, 2, 7], [5, 6, 7, 2, 4, 1, 9, 8, 3], [3, 6, 7, 9, 1, 8, 5, 2, 4], [4, 8, 2, 5, 3, 9, 1, 7, 6], [4, 8, 7, 1, 6, 3, 9, 5, 2], [6, 3, 7, 5, 1, 2, 9, 8, 4], [9, 3, 4, 8, 1, 2, 7, 5, 6], [5, 4, 3, 9, 7, 2, 1, 6, 8], [1, 9, 2, 7, 4, 3, 6, 5, 8], [1, 3, 5, 8, 6, 2, 4, 7, 9], [9, 4, 8, 6, 5, 1, 7, 2, 3], [8, 4, 2, 5, 1, 6, 3, 7, 9], [2, 9, 1, 8, 6, 5, 4, 3, 7], [9, 3, 8, 2, 7, 5, 6, 4, 1], [4, 6, 9, 8, 3, 1, 5, 7, 2], [5, 8, 9, 7, 3, 4, 6, 2, 1], [7, 2, 8, 6, 5, 3, 1, 9, 4], [7, 9, 8, 1, 3, 6, 5, 4, 2], [2, 4, 9, 6, 3, 1, 7, 8, 5], [5, 3, 2, 1, 4, 9, 8, 6, 7], [6, 7, 4, 3, 8, 5, 9, 2, 1], [8, 1, 4, 6, 9, 7, 5, 2, 3], [3, 8, 6, 1, 7, 5, 4, 9, 2], [9, 3, 7, 1, 6, 8, 2, 5, 4], [2, 9, 7, 5, 4, 6, 1, 3, 8], [5, 4, 9, 3, 8, 7, 1, 6, 2], [6, 9, 4, 7, 2, 3, 8, 5, 1], [2, 6, 8, 9, 7, 4, 5, 3, 1], [2, 5, 3, 4, 7, 9, 6, 1, 8], [1, 9, 7, 4, 2, 6, 5, 3, 8], [4, 9, 7, 3, 2, 1, 5, 8, 6], [5, 1, 2, 8, 6, 4, 3, 7, 9], [4, 5, 2, 7, 9, 8, 1, 3, 6], [8, 6, 7, 1, 5, 9, 3, 2, 4], [1, 5, 4, 9, 2, 6, 3, 8, 7], [4, 5, 9, 7, 1, 2, 6, 3, 8], [9, 1, 2, 3, 6, 7, 8, 4, 5], [9, 8, 3, 7, 5, 6, 2, 4, 1], [7, 6, 3, 9, 1, 2, 5, 4, 8], [3, 4, 1, 7, 5, 8, 6, 9, 2], [2, 5, 7, 6, 9, 8, 4, 1, 3], [8, 6, 9, 5, 2, 7, 1, 3, 4], [2, 5, 8, 1, 9, 7, 4, 3, 6], [1, 5, 7, 8, 6, 2, 9, 3, 4], [8, 9, 1, 5, 7, 4, 2, 3, 6], [9, 6, 2, 7, 4, 8, 3, 5, 1], [1, 8, 4, 9, 7, 2, 5, 3, 6], [1, 3, 9, 5, 4, 2, 7, 8, 6], [3, 6, 1, 7, 9, 8, 2, 5, 4], [8, 4, 9, 2, 7, 5, 1, 6, 3], [9, 6, 3, 5, 2, 4, 8, 1, 7], [4, 5, 7, 1, 9, 2, 6, 8, 3], [1, 8, 3, 4, 6, 9, 2, 7, 5], [6, 2, 9, 8, 1, 4, 5, 7, 3], [1, 2, 7, 4, 3, 9, 6, 8, 5], [1, 5, 3, 9, 2, 7, 4, 8, 6], [7, 4, 8, 9, 3, 6, 2, 5, 1], [6, 4, 8, 1, 9, 2, 7, 5, 3], [3, 8, 7, 1, 6, 5, 9, 4, 2], [2, 8, 6, 3, 1, 7, 9, 4, 5], [2, 5, 4, 3, 8, 9, 1, 7, 6], [2, 8, 6, 5, 4, 7, 1, 3, 9], [2, 8, 3, 5, 1, 7, 9, 4, 6], [1, 3, 2, 8, 7, 9, 4, 6, 5], [1, 5, 6, 8, 4, 7, 9, 3, 2], [8, 4, 5, 9, 2, 1, 6, 3, 7], [3, 4, 9, 7, 6, 5, 1, 8, 2], [1, 5, 6, 8, 3, 2, 4, 9, 7], [7, 8, 6, 1, 5, 3, 9, 4, 2], [1, 7, 8, 4, 3, 9, 5, 6, 2], [8, 7, 6, 1, 5, 4, 2, 9, 3], [1, 8, 9, 5, 4, 2, 6, 3, 7], [4, 1, 8, 9, 7, 3, 5, 2, 6], [4, 6, 8, 1, 3, 9, 5, 7, 2], [1, 3, 2, 8, 7, 4, 6, 9, 5], [5, 1, 8, 9, 3, 2, 6, 7, 4], [7, 5, 9, 8, 3, 2, 6, 1, 4], [2, 5, 3, 1, 4, 9, 6, 8, 7], [5, 6, 3, 1, 8, 9, 2, 7, 4], [3, 6, 8, 4, 2, 1, 5, 7, 9], [4, 3, 9, 8, 1, 5, 6, 2, 7], [2, 6, 1, 8, 7, 5, 3, 9, 4], [2, 4, 8, 7, 6, 9, 5, 3, 1], [7, 1, 5, 6, 8, 2, 9, 4, 3], [9, 8, 3, 2, 7, 5, 4, 1, 6], [3, 2, 4, 1, 8, 6, 7, 9, 5], [5, 7, 3, 2, 8, 1, 6, 4, 9], [2, 6, 8, 9, 1, 4, 7, 5, 3], [6, 3, 7, 8, 1, 5, 2, 9, 4], [7, 6, 9, 1, 3, 4, 2, 5, 8], [7, 8, 6, 1, 2, 3, 5, 9, 4], [2, 4, 8, 1, 3, 7, 5, 6, 9], [9, 1, 7, 3, 8, 4, 2, 5, 6], [2, 4, 8, 5, 9, 1, 7, 6, 3], [6, 8, 5, 3, 4, 1, 2, 7, 9], [4, 3, 5, 1, 6, 2, 7, 8, 9], [6, 3, 9, 2, 8, 4, 7, 1, 5], [5, 4, 2, 6, 3, 1, 7, 8, 9], [1, 5, 4, 2, 7, 8, 3, 9, 6], [2, 7, 5, 8, 1, 3, 9, 4, 6], [5, 8, 9, 3, 1, 7, 2, 6, 4], [6, 1, 9, 8, 3, 5, 7, 2, 4], [9, 8, 7, 2, 3, 1, 5, 6, 4], [9, 1, 6, 4, 2, 3, 7, 5, 8], [8, 6, 4, 3, 5, 9, 7, 2, 1], [6, 2, 5, 1, 7, 4, 8, 3, 9], [5, 1, 7, 3, 8, 2, 9, 4, 6], [8, 1, 5, 7, 2, 4, 6, 9, 3], [5, 6, 2, 8, 1, 3, 4, 9, 7], [2, 4, 9, 1, 5, 7, 3, 8, 6], [5, 3, 7, 6, 1, 2, 9, 8, 4], [4, 9, 7, 5, 3, 2, 6, 8, 1], [3, 9, 1, 6, 5, 4, 2, 7, 8], [6, 8, 4, 3, 7, 1, 9, 2, 5], [9, 2, 8, 5, 7, 4, 3, 6, 1], [4, 6, 9, 3, 8, 5, 7, 1, 2], [2, 7, 1, 5, 4, 3, 8, 6, 9], [3, 6, 9, 1, 8, 5, 4, 7, 2], [2, 5, 9, 7, 8, 3, 1, 6, 4], [3, 6, 8, 4, 2, 5, 1, 7, 9], [2, 9, 4, 3, 8, 5, 1, 6, 7], [1, 8, 9, 2, 6, 4, 7, 5, 3], [8, 4, 7, 9, 6, 3, 2, 1, 5], [5, 1, 9, 7, 8, 2, 6, 4, 3], [3, 7, 4, 5, 9, 2, 6, 1, 8], [6, 3, 7, 4, 8, 5, 1, 2, 9], [4, 3, 5, 6, 7, 9, 1, 2, 8], [2, 5, 1, 8, 4, 9, 6, 7, 3], [1, 2, 6, 4, 9, 8, 5, 3, 7], [1, 8, 6, 5, 7, 2, 4, 9, 3], [5, 8, 2, 1, 9, 6, 7, 4, 3], [6, 7, 9, 5, 4, 3, 1, 2, 8], [8, 3, 1, 4, 7, 2, 5, 6, 9], [7, 5, 2, 6, 3, 9, 8, 4, 1], [2, 3, 4, 1, 5, 8, 7, 9, 6], [6, 2, 9, 5, 8, 1, 7, 4, 3], [4, 7, 9, 5, 8, 3, 1, 6, 2], [1, 4, 9, 5, 3, 8, 7, 2, 6], [3, 6, 4, 5, 2, 8, 1, 9, 7], [7, 9, 8, 1, 3, 2, 6, 4, 5], [9, 5, 2, 3, 6, 4, 8, 1, 7], [9, 1, 5, 6, 7, 2, 3, 4, 8], [4, 9, 6, 2, 8, 1, 5, 7, 3], [2, 5, 1, 3, 9, 8, 7, 6, 4], [7, 6, 8, 5, 9, 2, 3, 1, 4], [2, 4, 6, 1, 9, 3, 5, 7, 8], [8, 1, 4, 5, 6, 2, 3, 9, 7], [1, 7, 5, 3, 6, 4, 8, 2, 9], [5, 2, 6, 3, 7, 8, 4, 9, 1], [3, 7, 1, 9, 5, 6, 2, 4, 8], [7, 6, 1, 4, 2, 5, 8, 9, 3], [3, 4, 6, 5, 2, 8, 7, 1, 9], [7, 5, 4, 6, 3, 1, 8, 2, 9], [8, 6, 3, 9, 5, 1, 4, 2, 7], [2, 6, 7, 3, 9, 5, 1, 8, 4], [1, 8, 2, 3, 9, 5, 4, 6, 7], [1, 9, 2, 8, 4, 5, 7, 6, 3], [6, 8, 9, 7, 3, 4, 1, 5, 2], [7, 4, 1, 5, 2, 3, 8, 9, 6], [6, 7, 1, 8, 4, 9, 3, 2, 5], [2, 7, 9, 6, 4, 8, 3, 5, 1], [9, 2, 1, 3, 6, 8, 7, 5, 4], [8, 3, 5, 2, 6, 9, 7, 1, 4], [8, 3, 4, 2, 7, 6, 5, 9, 1], [3, 8, 6, 4, 2, 9, 1, 7, 5], [4, 3, 9, 6, 1, 8, 7, 5, 2], [5, 8, 7, 4, 2, 9, 1, 3, 6], [8, 6, 3, 2, 9, 4, 7, 1, 5], [3, 9, 6, 5, 2, 8, 4, 7, 1], [9, 1, 8, 6, 2, 5, 4, 7, 3], [8, 7, 4, 2, 6, 3, 5, 9, 1], [8, 4, 9, 2, 5, 7, 6, 3, 1], [4, 9, 2, 1, 5, 3, 8, 7, 6], [2, 9, 6, 1, 4, 5, 8, 3, 7], [9, 3, 8, 7, 6, 4, 2, 5, 1], [9, 8, 3, 5, 4, 7, 6, 1, 2], [2, 9, 7, 4, 8, 5, 3, 1, 6], [6, 9, 4, 3, 7, 1, 2, 8, 5], [5, 3, 7, 2, 4, 6, 8, 9, 1], [4, 5, 1, 9, 6, 3, 7, 2, 8], [1, 3, 2, 6, 9, 8, 5, 4, 7], [7, 9, 6, 2, 4, 1, 5, 8, 3], [8, 5, 7, 2, 9, 3, 4, 6, 1], [2, 6, 9, 7, 4, 3, 8, 1, 5], [6, 9, 8, 1, 3, 4, 7, 2, 5], [1, 4, 5, 9, 6, 8, 7, 3, 2], [4, 3, 6, 7, 5, 2, 9, 1, 8], [9, 8, 2, 5, 4, 6, 3, 1, 7], [2, 3, 4, 9, 5, 8, 1, 6, 7], [2, 8, 9, 7, 3, 4, 6, 5, 1], [1, 8, 3, 2, 7, 9, 6, 5, 4], [3, 2, 1, 6, 9, 8, 5, 4, 7], [6, 2, 1, 4, 7, 3, 8, 9, 5], [3, 6, 5, 2, 9, 8, 4, 1, 7], [5, 7, 8, 1, 9, 6, 4, 3, 2], [6, 9, 2, 5, 8, 3, 4, 1, 7], [5, 6, 4, 2, 3, 9, 7, 8, 1], [4, 6, 2, 8, 7, 9, 5, 1, 3], [7, 6, 3, 9, 2, 5, 8, 4, 1], [9, 8, 6, 5, 2, 4, 1, 7, 3], [4, 7, 6, 8, 3, 5, 2, 9, 1], [5, 8, 6, 2, 3, 1, 7, 4, 9], [8, 6, 2, 4, 5, 1, 3, 9, 7], [8, 6, 5, 2, 7, 3, 1, 9, 4], [2, 8, 5, 3, 1, 6, 7, 4, 9], [1, 5, 2, 4, 9, 7, 8, 6, 3], [9, 5, 2, 1, 6, 3, 7, 8, 4], [3, 1, 6, 5, 4, 8, 7, 9, 2], [3, 2, 7, 9, 1, 4, 8, 5, 6], [1, 9, 4, 8, 6, 3, 7, 2, 5], [5, 8, 9, 3, 6, 1, 2, 7, 4], [1, 3, 6, 7, 5, 9, 2, 4, 8], [9, 6, 4, 8, 5, 2, 1, 3, 7], [2, 7, 6, 4, 8, 5, 3, 1, 9], [8, 1, 5, 3, 7, 4, 9, 6, 2], [9, 3, 8, 2, 6, 1, 4, 5, 7], [9, 7, 8, 3, 6, 4, 2, 1, 5], [2, 3, 7, 5, 9, 6, 8, 4, 1], [5, 9, 4, 8, 7, 2, 3, 6, 1], [5, 3, 7, 2, 8, 1, 6, 9, 4], [2, 1, 7, 6, 3, 4, 5, 9, 8], [6, 2, 8, 9, 1, 7, 3, 4, 5], [2, 5, 9, 3, 1, 8, 7, 4, 6], [7, 9, 5, 8, 3, 6, 2, 4, 1], [6, 1, 3, 4, 9, 2, 7, 5, 8], [4, 8, 2, 6, 1, 5, 3, 9, 7], [5, 4, 3, 6, 7, 2, 8, 9, 1], [1, 4, 6, 5, 3, 7, 8, 9, 2], [2, 6, 4, 7, 5, 8, 1, 3, 9], [8, 4, 3, 6, 7, 5, 2, 9, 1], [7, 6, 9, 4, 1, 3, 2, 8, 5], [4, 9, 3, 5, 6, 8, 2, 7, 1], [3, 2, 9, 6, 5, 8, 1, 4, 7], [4, 8, 2, 9, 5, 1, 3, 7, 6], [8, 9, 7, 1, 2, 3, 4, 6, 5], [4, 9, 2, 6, 7, 5, 1, 3, 8], [6, 1, 3, 7, 9, 8, 2, 4, 5], [1, 8, 6, 7, 9, 3, 5, 4, 2], [4, 3, 5, 7, 8, 1, 6, 2, 9], [6, 2, 4, 8, 7, 9, 3, 1, 5], [8, 5, 1, 7, 4, 9, 6, 3, 2], [5, 9, 2, 8, 4, 1, 3, 7, 6], [1, 6, 5, 2, 9, 4, 3, 8, 7], [9, 4, 3, 2, 7, 5, 6, 8, 1], [3, 1, 2, 7, 9, 4, 8, 5, 6], [2, 9, 4, 5, 7, 6, 8, 1, 3], [8, 6, 2, 7, 5, 4, 9, 3, 1], [5, 6, 7, 1, 2, 3, 4, 9, 8], [1, 7, 6, 2, 4, 5, 3, 8, 9], [9, 8, 6, 3, 4, 5, 1, 2, 7], [3, 6, 9, 8, 1, 5, 4, 7, 2], [8, 9, 1, 2, 4, 7, 5, 6, 3], [9, 4, 1, 6, 8, 7, 5, 3, 2], [4, 3, 7, 5, 9, 2, 1, 6, 8], [7, 4, 3, 9, 2, 8, 5, 6, 1], [4, 6, 9, 7, 1, 8, 3, 5, 2], [4, 3, 2, 6, 8, 1, 9, 7, 5], [8, 6, 7, 5, 9, 1, 3, 4, 2], [6, 2, 9, 1, 5, 7, 8, 4, 3], [7, 1, 6, 5, 3, 9, 8, 2, 4], [2, 7, 8, 6, 4, 9, 5, 3, 1], [5, 3, 8, 6, 9, 1, 4, 7, 2], [8, 3, 2, 1, 7, 6, 9, 5, 4], [7, 1, 9, 3, 2, 4, 8, 5, 6], [9, 3, 4, 2, 7, 1, 8, 5, 6], [3, 4, 1, 8, 2, 9, 5, 7, 6], [4, 6, 5, 9, 3, 7, 8, 1, 2], [7, 3, 1, 5, 2, 8, 9, 6, 4], [2, 3, 6, 8, 4, 7, 9, 5, 1], [8, 6, 5, 1, 7, 3, 2, 4, 9], [4, 2, 8, 6, 9, 3, 1, 5, 7], [6, 8, 1, 7, 3, 2, 5, 4, 9], [9, 5, 3, 1, 7, 2, 8, 6, 4], [1, 7, 8, 5, 3, 4, 9, 2, 6], [1, 5, 3, 9, 2, 8, 6, 7, 4], [4, 6, 2, 7, 1, 3, 5, 8, 9], [9, 1, 4, 3, 7, 6, 8, 5, 2], [6, 2, 5, 1, 8, 9, 4, 3, 7], [9, 7, 6, 1, 4, 2, 5, 3, 8], [1, 4, 8, 7, 3, 9, 5, 6, 2], [4, 6, 9, 2, 5, 1, 7, 3, 8], [2, 4, 3, 1, 9, 6, 8, 5, 7], [8, 5, 3, 7, 9, 2, 4, 1, 6], [9, 7, 8, 2, 1, 6, 5, 4, 3], [5, 2, 7, 9, 3, 1, 8, 4, 6], [4, 2, 7, 3, 8, 1, 9, 5, 6], [9, 1, 3, 8, 4, 6, 2, 5, 7], [6, 7, 8, 2, 4, 1, 5, 3, 9], [6, 8, 4, 7, 5, 3, 1, 9, 2], [3, 7, 4, 1, 8, 6, 9, 5, 2], [8, 1, 3, 9, 6, 7, 5, 4, 2], [8, 6, 9, 3, 7, 5, 4, 2, 1], [8, 1, 7, 4, 9, 2, 6, 3, 5], [8, 4, 9, 7, 5, 1, 6, 2, 3], [3, 4, 2, 8, 1, 5, 6, 9, 7], [7, 3, 4, 5, 1, 8, 9, 2, 6], [3, 5, 8, 6, 4, 9, 2, 7, 1], [2, 3, 4, 7, 8, 1, 5, 6, 9], [2, 1, 7, 9, 3, 4, 6, 8, 5], [3, 9, 8, 4, 2, 1, 6, 5, 7], [6, 3, 7, 5, 1, 2, 9, 4, 8], [9, 4, 5, 8, 1, 2, 7, 3, 6], [7, 4, 3, 5, 6, 8, 2, 1, 9], [1, 3, 9, 6, 4, 8, 7, 5, 2], [5, 6, 9, 1, 2, 4, 3, 7, 8], [4, 6, 7, 1, 9, 2, 8, 3, 5], [5, 9, 1, 8, 4, 3, 7, 6, 2], [9, 5, 6, 7, 2, 8, 3, 4, 1], [9, 2, 6, 3, 4, 1, 7, 8, 5], [2, 5, 4, 3, 6, 8, 1, 7, 9], [2, 1, 3, 9, 6, 4, 5, 7, 8], [9, 2, 6, 7, 5, 4, 3, 8, 1], [7, 6, 4, 5, 1, 8, 3, 9, 2], [1, 4, 7, 9, 2, 5, 6, 8, 3], [2, 8, 7, 9, 1, 3, 6, 5, 4], [3, 8, 1, 7, 6, 9, 5, 4, 2], [7, 9, 1, 4, 6, 5, 8, 3, 2], [9, 7, 8, 6, 3, 5, 2, 4, 1], [8, 1, 3, 7, 4, 5, 6, 9, 2], [4, 7, 3, 6, 1, 5, 2, 8, 9], [5, 8, 6, 1, 7, 9, 3, 4, 2], [7, 8, 9, 6, 3, 2, 1, 4, 5], [4, 6, 7, 8, 2, 1, 5, 9, 3], [5, 8, 7, 9, 6, 3, 2, 1, 4], [5, 7, 9, 3, 6, 1, 8, 4, 2], [3, 1, 8, 9, 6, 5, 4, 2, 7], [5, 4, 2, 3, 1, 7, 8, 6, 9], [6, 9, 1, 5, 8, 7, 3, 2, 4], [9, 3, 6, 7, 4, 8, 2, 1, 5], [2, 3, 8, 6, 7, 9, 5, 4, 1], [1, 3, 9, 7, 2, 6, 5, 8, 4], [3, 9, 8, 6, 4, 5, 1, 2, 7], [1, 9, 6, 3, 5, 7, 4, 8, 2], [3, 9, 7, 8, 5, 4, 1, 2, 6], [2, 9, 8, 3, 1, 6, 5, 4, 7], [5, 1, 7, 2, 8, 4, 9, 6, 3], [6, 3, 9, 1, 7, 5, 4, 2, 8], [1, 5, 4, 9, 8, 2, 6, 3, 7], [7, 9, 2, 3, 6, 1, 4, 8, 5], [6, 8, 4, 3, 1, 9, 7, 5, 2], [3, 1, 9, 6, 8, 7, 5, 4, 2], [6, 1, 7, 4, 9, 5, 3, 2, 8], [2, 1, 4, 5, 6, 3, 8, 9, 7], [8, 2, 7, 4, 3, 5, 6, 9, 1], [5, 6, 2, 4, 7, 9, 1, 8, 3], [5, 6, 7, 3, 2, 4, 1, 8, 9], [4, 5, 9, 1, 3, 8, 6, 2, 7], [4, 6, 2, 7, 1, 8, 3, 9, 5], [5, 6, 3, 2, 8, 7, 4, 9, 1], [8, 9, 7, 4, 2, 3, 1, 6, 5], [7, 5, 6, 8, 3, 2, 1, 4, 9], [8, 9, 1, 7, 3, 5, 4, 6, 2], [2, 4, 9, 5, 7, 8, 6, 3, 1], [3, 8, 7, 9, 1, 6, 5, 2, 4], [5, 2, 9, 8, 4, 1, 7, 6, 3], [6, 3, 4, 5, 1, 8, 7, 2, 9], [1, 7, 8, 6, 5, 4, 2, 3, 9], [9, 1, 3, 7, 2, 8, 5, 4, 6], [8, 4, 7, 2, 9, 5, 3, 6, 1], [1, 9, 2, 8, 5, 7, 3, 6, 4], [7, 6, 4, 8, 5, 3, 2, 9, 1], [6, 1, 8, 2, 9, 3, 7, 4, 5], [9, 4, 2, 5, 1, 3, 7, 8, 6], [7, 1, 3, 4, 8, 2, 6, 5, 9], [3, 8, 5, 9, 1, 4, 2, 6, 7], [8, 5, 3, 9, 6, 2, 1, 7, 4], [5, 3, 7, 2, 8, 9, 1, 4, 6], [2, 5, 3, 7, 8, 6, 4, 1, 9], [4, 8, 5, 9, 2, 1, 7, 3, 6], [5, 4, 6, 2, 3, 1, 9, 7, 8], [2, 9, 8, 4, 1, 3, 6, 7, 5], [9, 2, 7, 1, 3, 8, 6, 4, 5], [5, 2, 7, 1, 8, 3, 6, 4, 9], [8, 6, 7, 5, 2, 3, 4, 1, 9], [2, 5, 6, 4, 7, 3, 8, 1, 9], [7, 6, 5, 4, 9, 8, 2, 1, 3], [2, 5, 4, 3, 7, 1, 6, 8, 9], [1, 7, 4, 2, 9, 3, 8, 6, 5], [6, 2, 9, 1, 8, 7, 4, 3, 5], [8, 5, 3, 7, 1, 6, 9, 4, 2], [7, 8, 1, 3, 5, 6, 9, 4, 2], [7, 9, 3, 5, 2, 4, 1, 8, 6], [1, 5, 3, 4, 8, 7, 6, 9, 2], [2, 7, 3, 8, 9, 4, 5, 6, 1], [3, 5, 7, 2, 9, 4, 6, 1, 8], [1, 2, 6, 4, 7, 9, 5, 8, 3], [8, 4, 5, 2, 1, 6, 7, 9, 3], [2, 4, 1, 7, 5, 3, 9, 8, 6], [5, 7, 8, 6, 2, 1, 3, 9, 4], [9, 7, 1, 8, 4, 3, 5, 2, 6], [7, 3, 1, 9, 2, 6, 4, 5, 8], [4, 2, 5, 7, 8, 9, 3, 6, 1], [1, 3, 2, 8, 6, 5, 9, 7, 4], [2, 7, 5, 9, 1, 3, 8, 4, 6], [4, 6, 9, 1, 7, 3, 8, 2, 5], [1, 6, 2, 4, 5, 7, 9, 8, 3], [6, 9, 1, 4, 2, 8, 3, 5, 7], [2, 9, 7, 8, 3, 4, 6, 1, 5], [2, 6, 1, 4, 9, 7, 3, 5, 8], [2, 7, 8, 3, 1, 4, 9, 6, 5], [9, 1, 6, 5, 3, 7, 8, 2, 4], [1, 2, 5, 8, 3, 4, 7, 6, 9], [5, 3, 4, 8, 7, 2, 1, 9, 6], [5, 7, 6, 1, 4, 9, 8, 2, 3], [5, 7, 2, 4, 6, 9, 3, 8, 1], [2, 3, 8, 6, 7, 4, 5, 9, 1], [2, 8, 4, 9, 6, 5, 1, 3, 7], [3, 5, 8, 6, 1, 2, 7, 4, 9], [6, 3, 4, 9, 7, 2, 8, 5, 1], [7, 4, 8, 1, 9, 5, 3, 2, 6], [6, 8, 7, 5, 9, 3, 4, 1, 2], [1, 7, 6, 5, 3, 4, 2, 9, 8], [7, 9, 2, 1, 4, 6, 5, 8, 3], [7, 3, 5, 9, 1, 6, 2, 8, 4], [6, 5, 9, 7, 4, 1, 8, 3, 2], [9, 7, 2, 3, 5, 1, 4, 6, 8], [5, 6, 1, 7, 2, 9, 8, 4, 3], [6, 2, 7, 9, 4, 5, 8, 3, 1], [5, 6, 4, 7, 2, 3, 1, 9, 8], [8, 5, 1, 3, 7, 9, 6, 4, 2], [3, 1, 2, 6, 7, 9, 8, 4, 5], [7, 3, 2, 9, 5, 8, 1, 4, 6], [3, 8, 7, 1, 2, 9, 6, 4, 5], [6, 7, 1, 2, 3, 9, 4, 8, 5], [4, 7, 5, 2, 9, 8, 1, 6, 3], [3, 4, 9, 5, 7, 6, 8, 1, 2], [9, 3, 1, 7, 4, 6, 8, 5, 2], [3, 7, 1, 9, 6, 4, 5, 8, 2], [9, 6, 1, 5, 3, 7, 4, 8, 2], [2, 1, 6, 4, 9, 5, 8, 7, 3], [7, 5, 9, 3, 2, 1, 8, 4, 6], [5, 2, 8, 4, 7, 6, 3, 9, 1], [2, 7, 6, 3, 8, 9, 5, 4, 1], [1, 8, 6, 9, 4, 2, 5, 3, 7], [9, 2, 7, 3, 6, 1, 5, 8, 4], [6, 9, 2, 3, 4, 1, 7, 5, 8], [5, 4, 2, 6, 3, 1, 9, 8, 7], [2, 9, 1, 4, 6, 5, 7, 8, 3], [2, 6, 9, 5, 1, 4, 3, 7, 8], [4, 5, 8, 6, 1, 3, 9, 2, 7], [5, 2, 3, 4, 7, 8, 1, 6, 9], [5, 3, 1, 2, 6, 7, 9, 8, 4], [4, 6, 9, 3, 8, 1, 7, 2, 5], [1, 4, 7, 6, 2, 3, 8, 5, 9], [6, 1, 3, 8, 2, 7, 4, 5, 9], [6, 2, 8, 1, 3, 5, 4, 9, 7], [3, 8, 4, 6, 1, 7, 9, 5, 2], [4, 8, 2, 3, 1, 5, 9, 6, 7], [3, 2, 4, 5, 8, 6, 9, 7, 1], [7, 1, 8, 4, 2, 9, 6, 5, 3], [2, 5, 3, 7, 1, 6, 8, 9, 4], [7, 8, 3, 9, 5, 6, 4, 1, 2], [9, 4, 5, 3, 6, 8, 7, 1, 2], [7, 8, 6, 4, 3, 2, 5, 9, 1], [8, 9, 3, 5, 1, 4, 2, 6, 7], [4, 3, 7, 1, 9, 6, 8, 5, 2], [7, 5, 9, 1, 2, 6, 3, 8, 4], [6, 2, 7, 3, 1, 8, 5, 9, 4], [7, 8, 9, 2, 3, 4, 1, 5, 6], [7, 3, 2, 9, 8, 5, 4, 6, 1], [9, 8, 3, 7, 6, 1, 5, 4, 2], [5, 4, 9, 8, 7, 6, 2, 1, 3], [7, 1, 5, 4, 6, 8, 3, 9, 2], [3, 2, 5, 1, 8, 4, 6, 7, 9], [9, 8, 1, 3, 4, 6, 5, 7, 2], [9, 8, 7, 6, 4, 3, 1, 2, 5], [1, 4, 6, 9, 3, 7, 5, 8, 2], [7, 8, 5, 6, 2, 1, 9, 3, 4], [7, 6, 2, 5, 1, 8, 4, 9, 3], [2, 1, 3, 7, 9, 8, 6, 4, 5], [6, 2, 3, 4, 8, 5, 9, 1, 7], [8, 1, 9, 6, 7, 5, 2, 3, 4], [1, 5, 6, 8, 7, 4, 9, 3, 2], [3, 8, 1, 7, 2, 5, 4, 9, 6], [2, 6, 3, 9, 4, 7, 5, 8, 1], [1, 7, 6, 2, 4, 8, 9, 3, 5], [7, 3, 2, 1, 6, 8, 5, 9, 4], [7, 6, 9, 1, 3, 8, 5, 2, 4], [4, 7, 5, 2, 8, 1, 6, 9, 3], [8, 5, 3, 9, 6, 7, 1, 4, 2], [8, 6, 4, 3, 2, 7, 1, 5, 9], [5, 4, 1, 6, 8, 3, 7, 2, 9], [3, 7, 9, 5, 1, 4, 8, 2, 6], [1, 7, 2, 8, 3, 6, 5, 4, 9], [8, 4, 6, 2, 1, 3, 5, 9, 7], [3, 1, 6, 8, 7, 4, 5, 2, 9], [5, 3, 7, 9, 8, 6, 1, 2, 4], [9, 3, 8, 2, 1, 5, 6, 7, 4], [2, 7, 8, 6, 4, 5, 9, 1, 3], [2, 7, 6, 8, 1, 5, 4, 9, 3], [8, 6, 3, 4, 5, 1, 9, 2, 7], [7, 8, 6, 9, 5, 4, 3, 2, 1], [9, 5, 3, 1, 2, 8, 7, 6, 4], [2, 8, 1, 9, 5, 3, 6, 7, 4], [9, 7, 8, 1, 2, 5, 6, 3, 4], [4, 9, 1, 3, 8, 6, 2, 7, 5], [7, 5, 3, 6, 1, 9, 4, 8, 2], [5, 6, 2, 4, 8, 3, 7, 1, 9], [6, 9, 7, 2, 3, 5, 8, 1, 4], [1, 3, 9, 8, 6, 4, 5, 7, 2], [5, 9, 4, 2, 1, 3, 8, 6, 7], [6, 5, 1, 9, 2, 4, 8, 7, 3], [4, 5, 2, 9, 7, 8, 1, 3, 6], [2, 1, 9, 7, 8, 6, 4, 3, 5], [2, 3, 4, 6, 7, 5, 9, 8, 1], [5, 8, 6, 3, 4, 9, 1, 7, 2], [5, 2, 1, 4, 9, 6, 3, 8, 7], [6, 2, 9, 5, 1, 7, 3, 4, 8], [4, 6, 3, 9, 2, 7, 5, 1, 8], [5, 9, 8, 4, 3, 6, 2, 7, 1], [2, 7, 1, 6, 9, 3, 5, 4, 8], [8, 4, 3, 2, 1, 7, 6, 9, 5], [2, 9, 3, 4, 1, 7, 5, 6, 8], [6, 5, 3, 8, 9, 7, 2, 4, 1], [3, 6, 8, 7, 1, 5, 9, 2, 4], [2, 5, 7, 4, 3, 9, 6, 1, 8], [9, 5, 7, 2, 3, 4, 8, 1, 6], [7, 8, 3, 1, 2, 9, 5, 4, 6], [2, 9, 1, 3, 4, 8, 5, 6, 7], [8, 6, 7, 3, 9, 1, 2, 4, 5], [5, 6, 1, 8, 9, 2, 7, 3, 4], [7, 9, 2, 6, 8, 3, 5, 4, 1], [9, 8, 5, 2, 6, 7, 3, 4, 1], [1, 4, 7, 8, 5, 3, 9, 2, 6], [9, 7, 3, 5, 6, 2, 8, 1, 4], [7, 2, 1, 5, 6, 4, 9, 3, 8], [6, 5, 8, 7, 1, 9, 4, 2, 3], [6, 4, 8, 3, 9, 7, 2, 1, 5], [6, 9, 5, 4, 8, 1, 3, 7, 2], [8, 3, 7, 2, 4, 5, 6, 9, 1], [8, 3, 1, 6, 9, 4, 2, 5, 7], [6, 2, 8, 1, 9, 4, 5, 7, 3], [3, 5, 6, 7, 1, 4, 9, 8, 2], [8, 4, 9, 5, 7, 3, 6, 1, 2], [6, 1, 8, 2, 5, 3, 9, 4, 7], [6, 2, 8, 4, 7, 5, 1, 9, 3], [5, 3, 2, 6, 4, 8, 7, 9, 1], [1, 6, 8, 7, 5, 9, 4, 2, 3], [7, 3, 5, 4, 9, 6, 8, 1, 2], [2, 9, 5, 1, 3, 4, 7, 6, 8], [6, 8, 3, 5, 1, 2, 4, 9, 7], [6, 4, 7, 8, 1, 2, 5, 9, 3], [5, 1, 7, 4, 3, 6, 9, 8, 2], [2, 1, 7, 5, 9, 4, 3, 6, 8], [3, 5, 4, 6, 1, 8, 2, 7, 9], [9, 2, 6, 8, 7, 4, 5, 1, 3], [5, 2, 8, 7, 1, 9, 4, 6, 3], [9, 5, 4, 6, 3, 7, 1, 2, 8], [2, 7, 4, 9, 3, 8, 1, 5, 6], [8, 3, 2, 1, 5, 4, 6, 9, 7], [4, 2, 1, 3, 7, 6, 9, 5, 8], [6, 1, 2, 5, 3, 4, 8, 7, 9], [7, 6, 8, 4, 5, 3, 2, 9, 1], [8, 7, 9, 5, 1, 4, 2, 6, 3], [1, 9, 7, 2, 8, 5, 6, 4, 3], [6, 5, 3, 8, 4, 1, 9, 7, 2], [8, 9, 5, 6, 2, 1, 7, 3, 4], [2, 7, 1, 3, 9, 6, 4, 5, 8], [4, 5, 6, 8, 3, 2, 7, 1, 9], [5, 7, 9, 1, 3, 8, 4, 2, 6], [1, 6, 4, 9, 2, 5, 7, 3, 8], [1, 3, 8, 2, 6, 7, 5, 4, 9], [3, 1, 8, 6, 7, 4, 2, 9, 5], [2, 7, 6, 4, 9, 5, 1, 3, 8], [1, 8, 4, 7, 9, 6, 3, 5, 2], [1, 2, 4, 6, 9, 8, 5, 7, 3], [5, 6, 9, 8, 7, 4, 1, 2, 3], [1, 5, 4, 3, 2, 8, 7, 9, 6], [9, 6, 5, 1, 7, 3, 8, 4, 2], [9, 5, 4, 1, 8, 2, 3, 7, 6], [2, 1, 9, 3, 4, 8, 5, 6, 7], [6, 8, 4, 3, 1, 9, 5, 2, 7], [7, 9, 6, 2, 4, 3, 5, 8, 1], [8, 4, 7, 1, 5, 3, 9, 6, 2], [1, 5, 2, 4, 6, 8, 7, 3, 9], [2, 5, 3, 4, 1, 6, 7, 8, 9], [9, 4, 6, 3, 7, 1, 5, 8, 2], [8, 6, 1, 3, 2, 5, 4, 7, 9], [6, 5, 9, 4, 8, 3, 1, 2, 7], [4, 1, 8, 9, 7, 6, 5, 2, 3], [1, 9, 5, 3, 6, 2, 8, 4, 7], [8, 9, 3, 4, 1, 2, 6, 5, 7], [8, 2, 5, 7, 9, 4, 6, 1, 3], [9, 4, 7, 6, 1, 2, 8, 5, 3], [1, 4, 3, 6, 7, 9, 2, 8, 5], [6, 5, 4, 7, 9, 8, 2, 1, 3], [9, 7, 2, 1, 5, 3, 6, 4, 8], [5, 9, 2, 1, 8, 4, 6, 3, 7], [3, 8, 9, 2, 6, 5, 7, 4, 1], [9, 3, 6, 2, 5, 8, 7, 1, 4], [8, 2, 1, 4, 6, 7, 3, 9, 5], [2, 4, 6, 9, 5, 8, 1, 3, 7], [6, 8, 1, 7, 2, 5, 4, 9, 3], [2, 8, 4, 9, 5, 1, 3, 6, 7], [3, 9, 4, 7, 6, 1, 8, 2, 5], [4, 7, 6, 9, 1, 3, 5, 2, 8], [6, 7, 8, 3, 1, 2, 5, 4, 9], [9, 4, 3, 2, 7, 1, 5, 6, 8], [3, 1, 7, 6, 5, 2, 8, 9, 4], [7, 1, 5, 2, 4, 6, 9, 3, 8], [7, 3, 1, 5, 4, 2, 6, 9, 8], [3, 4, 8, 6, 2, 1, 7, 9, 5], [2, 8, 7, 4, 1, 6, 3, 9, 5], [6, 8, 9, 3, 1, 2, 5, 4, 7], [6, 2, 5, 9, 8, 3, 7, 1, 4], [1, 3, 8, 9, 4, 7, 5, 6, 2], [7, 3, 8, 5, 1, 2, 9, 4, 6], [1, 3, 5, 7, 2, 8, 6, 4, 9], [7, 3, 6, 5, 8, 1, 4, 9, 2], [6, 5, 3, 2, 1, 8, 4, 7, 9], [8, 7, 4, 3, 9, 1, 5, 2, 6], [2, 9, 4, 3, 7, 5, 1, 6, 8], [9, 3, 4, 7, 2, 5, 6, 1, 8], [2, 9, 8, 5, 1, 6, 7, 4, 3], [7, 4, 8, 3, 1, 2, 5, 6, 9], [4, 1, 7, 9, 5, 6, 2, 3, 8], [4, 7, 1, 2, 6, 5, 9, 8, 3], [8, 5, 1, 4, 9, 7, 3, 6, 2], [8, 4, 5, 9, 1, 3, 7, 2, 6], [4, 8, 5, 6, 2, 3, 7, 9, 1], [3, 9, 2, 4, 1, 7, 5, 8, 6], [1, 7, 9, 8, 3, 4, 6, 2, 5], [2, 4, 9, 3, 6, 5, 1, 7, 8], [9, 4, 7, 3, 1, 2, 6, 8, 5], [1, 4, 7, 2, 9, 3, 8, 6, 5], [6, 2, 8, 1, 4, 7, 9, 3, 5], [8, 1, 2, 3, 4, 5, 7, 9, 6], [7, 8, 1, 9, 6, 2, 5, 3, 4], [8, 4, 7, 5, 6, 3, 1, 2, 9], [8, 7, 2, 9, 5, 1, 3, 4, 6], [9, 2, 1, 7, 8, 6, 4, 3, 5], [6, 1, 2, 4, 3, 8, 7, 5, 9], [1, 6, 4, 7, 5, 9, 8, 3, 2], [5, 1, 8, 2, 3, 4, 7, 9, 6], [9, 1, 7, 2, 8, 6, 3, 4, 5], [9, 2, 6, 5, 8, 4, 1, 3, 7], [3, 1, 4, 5, 2, 7, 6, 8, 9], [3, 2, 1, 4, 8, 9, 5, 7, 6], [5, 8, 4, 6, 9, 3, 2, 7, 1], [3, 9, 1, 7, 2, 6, 8, 5, 4], [2, 1, 6, 4, 9, 8, 3, 7, 5], [9, 2, 4, 8, 5, 1, 3, 6, 7], [4, 3, 2, 7, 9, 1, 5, 6, 8], [5, 2, 1, 3, 6, 4, 8, 7, 9], [1, 7, 8, 6, 4, 3, 9, 2, 5], [7, 3, 2, 5, 9, 1, 8, 4, 6], [6, 1, 9, 5, 4, 3, 8, 2, 7], [9, 7, 3, 8, 4, 5, 2, 1, 6], [6, 9, 2, 3, 7, 8, 4, 1, 5], [4, 6, 3, 2, 9, 8, 1, 7, 5], [4, 5, 7, 9, 3, 2, 8, 1, 6], [4, 8, 7, 3, 1, 2, 5, 9, 6], [2, 6, 9, 7, 3, 8, 1, 4, 5], [8, 6, 9, 7, 2, 1, 5, 4, 3], [1, 3, 6, 2, 5, 7, 4, 9, 8], [9, 7, 3, 4, 8, 5, 2, 1, 6], [8, 6, 3, 7, 4, 2, 9, 5, 1], [3, 6, 9, 5, 2, 1, 4, 7, 8], [8, 9, 5, 4, 2, 1, 3, 6, 7], [7, 1, 2, 5, 6, 8, 9, 4, 3], [3, 6, 9, 5, 1, 4, 8, 7, 2], [2, 7, 1, 5, 4, 9, 8, 6, 3], [1, 3, 5, 2, 7, 8, 6, 9, 4], [9, 8, 4, 3, 6, 7, 2, 5, 1], [3, 1, 5, 2, 8, 6, 7, 4, 9], [3, 1, 7, 6, 2, 5, 9, 8, 4], [3, 9, 1, 6, 5, 4, 7, 2, 8], [8, 7, 1, 2, 6, 5, 9, 4, 3], [6, 3, 7, 2, 8, 1, 9, 4, 5], [9, 8, 3, 7, 5, 1, 2, 6, 4], [5, 6, 2, 4, 3, 9, 7, 1, 8], [3, 6, 4, 1, 7, 9, 5, 8, 2], [8, 1, 6, 3, 2, 4, 7, 5, 9], [7, 5, 2, 1, 6, 9, 4, 3, 8], [5, 6, 2, 8, 4, 3, 7, 9, 1], [2, 6, 1, 7, 4, 5, 9, 3, 8], [2, 4, 5, 7, 1, 9, 8, 6, 3], [8, 4, 7, 3, 6, 9, 5, 2, 1], [2, 3, 5, 1, 6, 9, 4, 7, 8], [6, 3, 2, 7, 5, 9, 8, 1, 4], [6, 1, 8, 4, 7, 9, 5, 3, 2], [2, 3, 8, 9, 6, 7, 5, 1, 4], [1, 7, 5, 3, 6, 4, 2, 8, 9], [3, 2, 5, 1, 6, 7, 4, 9, 8], [3, 6, 9, 4, 8, 5, 7, 2, 1], [5, 7, 4, 3, 2, 1, 9, 6, 8], [3, 9, 2, 1, 7, 4, 8, 6, 5], [3, 4, 9, 2, 5, 1, 6, 8, 7], [2, 7, 8, 4, 1, 3, 5, 9, 6], [3, 1, 6, 4, 9, 5, 7, 2, 8], [8, 1, 9, 2, 4, 6, 3, 5, 7], [4, 8, 3, 1, 2, 5, 9, 6, 7], [1, 5, 8, 2, 6, 7, 4, 9, 3], [6, 7, 9, 1, 8, 2, 5, 3, 4], [4, 2, 9, 6, 5, 1, 3, 8, 7], [1, 3, 8, 7, 9, 4, 6, 5, 2], [9, 1, 6, 2, 7, 8, 4, 3, 5], [2, 9, 6, 4, 3, 5, 1, 7, 8], [8, 1, 7, 6, 5, 9, 3, 4, 2], [2, 8, 1, 5, 7, 3, 4, 6, 9], [8, 6, 5, 7, 2, 9, 4, 3, 1], [6, 4, 9, 8, 2, 7, 5, 1, 3], [5, 8, 3, 7, 4, 9, 2, 6, 1], [1, 4, 2, 6, 5, 8, 7, 3, 9], [1, 4, 7, 5, 9, 3, 8, 2, 6], [5, 2, 8, 6, 1, 7, 4, 9, 3], [8, 7, 3, 2, 1, 4, 5, 6, 9], [4, 1, 8, 6, 2, 9, 3, 7, 5], [2, 7, 5, 8, 9, 3, 6, 4, 1], [5, 1, 3, 8, 6, 2, 9, 4, 7], [9, 6, 8, 3, 2, 4, 5, 7, 1], [9, 6, 4, 8, 1, 7, 3, 5, 2], [4, 7, 8, 1, 5, 3, 6, 9, 2], [4, 9, 2, 6, 5, 1, 7, 3, 8], [5, 1, 3, 8, 6, 4, 9, 2, 7], [3, 5, 2, 7, 4, 6, 9, 8, 1], [4, 7, 9, 6, 5, 2, 8, 3, 1], [4, 2, 6, 8, 9, 7, 3, 1, 5], [7, 4, 8, 3, 2, 9, 6, 1, 5], [9, 2, 7, 5, 6, 8, 3, 4, 1], [4, 5, 6, 1, 7, 9, 8, 3, 2], [3, 1, 8, 6, 9, 5, 7, 4, 2], [4, 2, 6, 1, 7, 8, 3, 5, 9], [2, 8, 9, 4, 5, 1, 7, 3, 6], [6, 3, 7, 8, 5, 2, 1, 9, 4], [5, 9, 2, 7, 1, 6, 4, 3, 8], [4, 9, 5, 2, 8, 3, 6, 7, 1], [1, 3, 4, 7, 2, 9, 6, 8, 5], [2, 7, 6, 5, 3, 1, 8, 4, 9], [8, 3, 9, 6, 7, 1, 2, 4, 5], [6, 4, 3, 7, 2, 5, 8, 9, 1], [6, 9, 7, 8, 3, 4, 5, 2, 1], [5, 6, 4, 2, 9, 7, 1, 8, 3], [7, 5, 8, 9, 1, 3, 6, 4, 2], [6, 1, 7, 3, 5, 8, 4, 2, 9], [3, 2, 6, 4, 5, 9, 1, 7, 8], [6, 5, 4, 2, 1, 7, 8, 3, 9], [9, 1, 5, 8, 4, 2, 3, 6, 7], [4, 2, 8, 6, 9, 3, 7, 5, 1], [7, 1, 9, 4, 3, 8, 5, 6, 2], [5, 8, 2, 4, 1, 9, 7, 6, 3], [7, 9, 8, 1, 3, 2, 4, 6, 5], [6, 2, 5, 4, 7, 1, 9, 8, 3], [3, 6, 1, 5, 7, 4, 9, 2, 8], [2, 1, 4, 3, 5, 8, 6, 9, 7], [8, 2, 3, 9, 6, 1, 7, 5, 4], [6, 5, 2, 7, 4, 9, 3, 8, 1], [3, 9, 6, 4, 8, 2, 5, 1, 7], [4, 5, 9, 2, 7, 3, 1, 8, 6], [3, 6, 2, 1, 9, 8, 4, 5, 7], [4, 9, 2, 8, 5, 1, 7, 6, 3], [4, 3, 7, 6, 5, 8, 9, 2, 1], [3, 6, 2, 7, 4, 1, 9, 5, 8], [6, 1, 2, 3, 9, 8, 5, 4, 7], [3, 4, 1, 8, 5, 6, 2, 9, 7], [5, 6, 9, 8, 7, 4, 3, 2, 1], [9, 8, 4, 7, 3, 2, 5, 1, 6], [7, 8, 3, 9, 2, 1, 4, 5, 6], [1, 8, 2, 9, 5, 7, 3, 4, 6], [7, 9, 8, 1, 2, 3, 4, 5, 6], [4, 1, 7, 2, 3, 5, 8, 6, 9], [6, 5, 7, 9, 2, 1, 4, 3, 8], [2, 7, 4, 5, 6, 9, 8, 3, 1], [8, 3, 4, 9, 1, 2, 5, 7, 6], [4, 1, 7, 2, 9, 3, 5, 8, 6], [5, 8, 6, 1, 7, 4, 2, 9, 3], [6, 1, 7, 5, 2, 8, 9, 3, 4], [8, 6, 7, 3, 9, 5, 2, 1, 4], [4, 8, 2, 6, 3, 1, 7, 5, 9], [9, 7, 3, 4, 6, 5, 8, 2, 1], [1, 3, 4, 5, 9, 7, 6, 2, 8], [9, 8, 2, 6, 3, 1, 5, 4, 7], [6, 7, 4, 2, 1, 9, 5, 3, 8], [9, 1, 8, 5, 3, 7, 2, 6, 4], [1, 5, 8, 7, 9, 3, 6, 2, 4], [2, 3, 5, 6, 4, 7, 9, 1, 8], [5, 9, 6, 4, 1, 7, 2, 3, 8], [7, 6, 4, 1, 9, 5, 3, 8, 2], [9, 8, 5, 7, 4, 6, 2, 3, 1], [1, 8, 4, 3, 7, 6, 9, 5, 2], [5, 6, 9, 1, 2, 3, 4, 8, 7], [4, 6, 3, 8, 9, 7, 2, 5, 1], [3, 7, 6, 1, 2, 5, 4, 9, 8], [4, 6, 3, 7, 8, 9, 2, 5, 1], [5, 3, 6, 4, 2, 1, 8, 9, 7], [8, 6, 9, 2, 1, 7, 5, 3, 4], [4, 7, 6, 2, 8, 1, 3, 9, 5], [7, 6, 3, 8, 2, 9, 1, 4, 5], [5, 7, 2, 4, 9, 1, 8, 6, 3], [3, 2, 9, 1, 5, 7, 8, 6, 4], [7, 4, 6, 3, 5, 1, 2, 8, 9], [6, 1, 4, 9, 5, 8, 3, 2, 7], [8, 6, 5, 7, 9, 3, 4, 1, 2], [2, 6, 9, 7, 4, 1, 8, 5, 3], [6, 3, 1, 2, 7, 9, 5, 4, 8], [5, 6, 3, 8, 1, 4, 2, 9, 7], [3, 1, 4, 6, 5, 2, 9, 7, 8], [1, 3, 4, 6, 7, 8, 5, 2, 9], [7, 4, 1, 3, 6, 9, 5, 2, 8], [9, 7, 4, 6, 3, 1, 8, 2, 5], [3, 9, 5, 6, 2, 1, 8, 4, 7], [3, 5, 6, 4, 9, 7, 1, 2, 8], [3, 2, 7, 4, 8, 1, 6, 5, 9], [9, 6, 3, 2, 5, 7, 4, 1, 8], [3, 8, 4, 6, 1, 7, 2, 9, 5], [1, 4, 6, 3, 8, 7, 2, 9, 5], [3, 5, 4, 2, 6, 9, 8, 1, 7], [9, 5, 3, 2, 1, 8, 4, 7, 6], [2, 8, 4, 6, 3, 9, 1, 7, 5], [3, 1, 8, 4, 9, 5, 7, 6, 2], [9, 3, 2, 5, 1, 4, 7, 8, 6], [6, 4, 2, 7, 8, 5, 3, 9, 1], [4, 5, 1, 2, 8, 7, 3, 9, 6], [6, 9, 1, 3, 7, 8, 5, 2, 4], [4, 5, 8, 6, 9, 1, 3, 7, 2], [6, 3, 2, 1, 4, 5, 7, 9, 8], [6, 1, 4, 3, 9, 5, 7, 2, 8], [9, 7, 2, 5, 6, 4, 1, 3, 8], [9, 4, 7, 8, 6, 3, 1, 5, 2], [1, 4, 2, 8, 9, 6, 7, 3, 5], [4, 9, 5, 6, 8, 7, 2, 3, 1], [6, 2, 7, 4, 5, 9, 1, 3, 8], [1, 3, 6, 4, 8, 5, 7, 2, 9], [4, 8, 2, 1, 5, 3, 7, 6, 9], [9, 4, 1, 5, 3, 6, 2, 7, 8], [9, 3, 2, 1, 8, 5, 4, 6, 7], [8, 7, 5, 1, 4, 9, 3, 2, 6], [7, 9, 8, 1, 5, 4, 2, 6, 3], [9, 3, 4, 6, 5, 8, 2, 1, 7], [6, 8, 9, 3, 7, 2, 1, 4, 5], [5, 1, 6, 4, 9, 2, 8, 7, 3], [6, 8, 9, 1, 2, 5, 7, 3, 4], [8, 4, 3, 7, 5, 1, 6, 9, 2], [9, 7, 6, 4, 2, 3, 8, 1, 5], [8, 3, 6, 1, 5, 4, 7, 9, 2], [2, 8, 1, 5, 4, 9, 7, 6, 3], [7, 9, 4, 5, 2, 1, 3, 8, 6], [3, 1, 6, 8, 4, 9, 5, 2, 7], [2, 5, 7, 8, 1, 9, 4, 6, 3], [7, 6, 9, 1, 8, 4, 5, 3, 2], [8, 2, 5, 4, 9, 1, 3, 6, 7], [6, 1, 8, 2, 9, 4, 5, 3, 7], [3, 2, 8, 5, 9, 1, 4, 7, 6], [5, 9, 8, 2, 6, 4, 7, 3, 1], [5, 6, 7, 2, 1, 9, 8, 4, 3], [3, 5, 2, 8, 9, 4, 7, 6, 1], [1, 3, 6, 5, 9, 8, 4, 2, 7], [6, 8, 7, 3, 9, 4, 2, 1, 5], [4, 8, 6, 1, 3, 7, 9, 5, 2], [6, 4, 5, 9, 2, 8, 7, 1, 3], [7, 1, 8, 5, 6, 3, 9, 2, 4], [3, 4, 5, 1, 2, 9, 7, 8, 6], [3, 7, 6, 2, 9, 1, 8, 4, 5], [9, 1, 4, 2, 5, 8, 7, 3, 6], [2, 1, 7, 8, 6, 9, 4, 3, 5], [3, 8, 1, 7, 6, 2, 4, 9, 5], [2, 3, 1, 8, 4, 6, 9, 5, 7], [5, 3, 9, 7, 6, 2, 4, 1, 8], [1, 8, 9, 6, 7, 4, 2, 3, 5], [8, 6, 1, 2, 5, 4, 9, 3, 7], [6, 3, 7, 2, 1, 4, 5, 9, 8], [6, 3, 4, 7, 8, 2, 1, 5, 9], [7, 1, 6, 5, 9, 4, 2, 3, 8], [5, 1, 6, 8, 3, 9, 4, 7, 2], [5, 6, 2, 8, 7, 9, 4, 1, 3], [8, 6, 5, 3, 2, 4, 7, 1, 9], [4, 1, 6, 2, 3, 7, 9, 5, 8], [2, 1, 9, 4, 3, 8, 6, 7, 5], [1, 4, 6, 7, 8, 5, 3, 9, 2], [7, 2, 6, 1, 3, 4, 8, 5, 9], [4, 2, 9, 8, 7, 6, 3, 1, 5], [8, 2, 4, 1, 9, 5, 3, 6, 7], [5, 9, 3, 6, 8, 2, 1, 7, 4], [5, 9, 6, 7, 1, 8, 3, 2, 4], [3, 2, 6, 1, 9, 4, 5, 7, 8], [8, 9, 1, 4, 5, 3, 2, 6, 7], [5, 4, 2, 6, 7, 3, 8, 1, 9], [5, 1, 7, 6, 3, 8, 2, 9, 4], [1, 3, 7, 9, 2, 8, 5, 6, 4], [4, 3, 2, 9, 7, 6, 5, 1, 8], [6, 1, 7, 8, 5, 2, 4, 3, 9], [9, 5, 8, 3, 6, 4, 1, 2, 7], [8, 5, 1, 9, 3, 6, 4, 7, 2], [2, 1, 4, 8, 6, 7, 9, 5, 3], [5, 2, 8, 7, 6, 9, 4, 1, 3], [6, 2, 7, 9, 1, 8, 3, 4, 5], [3, 8, 5, 6, 2, 4, 1, 9, 7],];
    }
}