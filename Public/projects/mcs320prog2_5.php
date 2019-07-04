<?php require_once('..\..\Private\initialize.php'); ?>
<?php $title = "Sam's Project 2.5";
    $script = '<script src="https://sagecell.sagemath.org/static/jquery.min.js"></script>
    <script src="https://sagecell.sagemath.org/embedded_sagecell.js"></script>
    <script>
$(function () {
    // Make *any* div with class \'compute\' a Sage cell 
    sagecell.makeSagecell({inputLocation: \'div.compute\',
							template: sagecell.templates.minimal,
							evalButtonText: \'Launch\'});
});
    </script>' ;?>

<?php include(SHARED_PATH.'/main_header.php')?>

<div class = "main">
<p>Interactive Applets powered by Sage and MathJax.</p>
<p>Project 2.5</p>

<?php include(SHARED_PATH.'/nav.php'); ?>
<h3>A Hypocycloid:</h3>
<p>Click the button... DO IT!! it'll be fun watch.</p>
<p>The Slider will draw the graph up to the indecated value.</p>
           
<div class='compute'>
	<script type="text/x-sage">
		
@interact
def Hypocycloid(t0 = slider(pi/20, 2*pi, pi/20, 2*pi-pi/10,label="Degree")):
	var('t')
	r1=0.3
	r2=0.25
	x(t) = 3*cos(-2*t) + 2*cos(3*t)
	y(t) = 3*sin(-2*t) + 2*sin(3*t)

	star = parametric_plot((x,y),(t,0,t0))
	
	#circle at origin / crank
	c_1 = circle((0,0),r1, color = 'purple')

	joint_x = 3*cos(-2*t0)
	joint_y = 3*sin(-2*t0)
	#Joint  coordinates (3*cos(−2*t),3*sin(−2*t))
	c_2 = circle((joint_x, joint_y),r2, color='purple')

	#Link 1   (0,0) to (3*cos(−2*t),3*sin(−2*t)). length = 3 == r
	link = line2d(((0,0), (joint_x,joint_y)),color = 'red')


	#Link 2 (3*cos(−2*t),3*sin(−2*t)) to  x(t),y(t)

	link2 =line2d(((joint_x,joint_y),(x(t0),y(t0))), color = 'red')

	#gears:
	purple = line2d(((r1*sin(-2*t0),-r1*cos(-2*t0)), (joint_x-r2*sin(-2*t0), joint_y+r2*cos(-2*t0))),color = 'purple')
	green = line2d(((-r1*sin(-2*t0),r1*cos(-2*t0)),(joint_x+r2*sin(-2*t0), joint_y-r2*cos(-2*t0))),color = 'green')

	#Bringing it all together.
	(link+link2+c_1+c_2+star+purple+green).show(xmin=-6, xmax=6,ymin=-6,ymax=6)
	</script>
</div>
    <p>Typically, a <a href="http://mathworld.wolfram.com/Hypocycloid.html">Hypocycloid</a> is a curve created by a small circle 'rolling' inside of a larger circle. This Hypocycloid traces the path at single point located on the smaller of the two circles. With the inner arm traces the intersection point of the two circles and the smaller arm traces a fixed point on the inner circle we can see that the fixed point travels in a 5 star pattern. </p>
      
<h3>My Trifolium:</h3>
<div class="compute">
<script type="text/x-sage">


@interact
def trifol(t0 = slider(pi/40, pi, pi/40, pi-pi/20,label="Degree")):
    t = var('t')
    x = cos(-2*t + pi) + cos(4*t + pi)
    y = sin(-2*t + pi) + sin(4*t + pi)
    
    
    tri = parametric_plot((x,y),(t,0,t0)) 

    #crank at (0,0), r = .2
    r1 = 0.2
    c_1 = circle((0,0),r1, color="black")

    #joint at ( ) r = .1
    r2 = 0.1
    x_joint= cos(-2*t0+pi)
    y_joint= sin(-2*t0+pi)
    
    c_2 = circle((x_joint,y_joint),r2,color="black")

    #arm 1 w/ length 1
    L_1 = line2d(((0,0),(x_joint,y_joint)),color = 'red')
    
	#arm 2 w/ length 1
    L_2 = line2d(((x_joint,y_joint), (x(t0),y(t0))),color = 'red')
    #gears
    L_G = line2d(((-r1*y_joint,r1*x_joint),(x_joint+r2*y_joint,y_joint-r2*x_joint)), color = 'black')
    
    R_G = line2d(((r1*y_joint,-r1*x_joint),(x_joint-r2*y_joint,y_joint+r2*x_joint)),color = 'black')
    #pulling it all together:
    (tri+c_1+c_2+L_1+L_2+L_G+R_G).show(xmin=-2,xmax=2,ymin=-2,ymax=2)
</script> 
</div>    
    <p> The <a href="www-history.mcs.st-and.ac.uk/Curves/Trifolium.html">Trifolium</a> in this example is created by tracing the path of an equation, but we can also see that if can follow a similar method as above. The difference is that this followed a path of two circles of equal radii. The center of the outter circle is located on the edge of the inner circle  and rotates clockwise. The inner circle maintains its center at the origin but rotates in a counterclockwise motion. </p>


<?php include(SHARED_PATH.'/main_footer.php');?>