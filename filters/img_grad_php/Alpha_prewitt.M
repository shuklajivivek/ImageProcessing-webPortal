function flag = Alpha_prewitt(img, outimg)

i = imread(img);
i = rgb2gray(i);

%define prewitt filter
prewitt_x = [-1 -1 -1; 0 0 0; 1 1 1];
prewitt_y = [-1 0 1; -1 0 1; -1 0 1];


%applying prewitt filter
i_p_x = filterify(i,prewitt_x,'corr');
i_p_y = filterify(i,prewitt_y,'corr');


%alpha matrix in degrees
Alpha_prewitt = atand(i_p_y/i_p_x);

%save to disk
imwrite(Alpha_prewitt, outimg);

flag = 1;
end
