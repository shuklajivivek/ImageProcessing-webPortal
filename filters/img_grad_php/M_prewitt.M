function flag = M_prewitt(img, outimg)

i = imread(img);
i = rgb2gray(i);

%define prewitt filter
prewitt_x = [-1 -1 -1; 0 0 0; 1 1 1];
prewitt_y = [-1 0 1; -1 0 1; -1 0 1];


%applying prewitt filter
i_p_x = filterify(i,prewitt_x,'corr');
i_p_y = filterify(i,prewitt_y,'corr');

%M matrix
M_prewitt = abs(i_p_x) + abs(i_p_y);

%save to disk
imwrite(M_prewitt,outimg);

flag = 1;

end
