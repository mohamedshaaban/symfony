<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_4b6a7329580c1a064f8a7acd66ee59dd0ecb07835befcdc2cc78daaa3c2c5f44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b21007d2a86225041ad8c8a95fe39c5a25d654b9d2516e685ddfec8cc8bbbbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b21007d2a86225041ad8c8a95fe39c5a25d654b9d2516e685ddfec8cc8bbbbf->enter($__internal_7b21007d2a86225041ad8c8a95fe39c5a25d654b9d2516e685ddfec8cc8bbbbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_6997bcf87087b971abf7946636fb3b6172e1e719ff3db3a673fb9eb0f133a366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6997bcf87087b971abf7946636fb3b6172e1e719ff3db3a673fb9eb0f133a366->enter($__internal_6997bcf87087b971abf7946636fb3b6172e1e719ff3db3a673fb9eb0f133a366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_7b21007d2a86225041ad8c8a95fe39c5a25d654b9d2516e685ddfec8cc8bbbbf->leave($__internal_7b21007d2a86225041ad8c8a95fe39c5a25d654b9d2516e685ddfec8cc8bbbbf_prof);

        
        $__internal_6997bcf87087b971abf7946636fb3b6172e1e719ff3db3a673fb9eb0f133a366->leave($__internal_6997bcf87087b971abf7946636fb3b6172e1e719ff3db3a673fb9eb0f133a366_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
