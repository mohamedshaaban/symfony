<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_bbc19ac842686aea048ac745d94d61e3582c151135cd08d489e2675699d3c87c extends Twig_Template
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
        $__internal_238e49f9e6b71eafb252f177a9a38bfd9a5e7300e88bc07ee67141dcb7257aae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_238e49f9e6b71eafb252f177a9a38bfd9a5e7300e88bc07ee67141dcb7257aae->enter($__internal_238e49f9e6b71eafb252f177a9a38bfd9a5e7300e88bc07ee67141dcb7257aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_25d1d0e73f547bd536956276ea9609a00ff8870d615d2404ecb864b296646a5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25d1d0e73f547bd536956276ea9609a00ff8870d615d2404ecb864b296646a5f->enter($__internal_25d1d0e73f547bd536956276ea9609a00ff8870d615d2404ecb864b296646a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_238e49f9e6b71eafb252f177a9a38bfd9a5e7300e88bc07ee67141dcb7257aae->leave($__internal_238e49f9e6b71eafb252f177a9a38bfd9a5e7300e88bc07ee67141dcb7257aae_prof);

        
        $__internal_25d1d0e73f547bd536956276ea9609a00ff8870d615d2404ecb864b296646a5f->leave($__internal_25d1d0e73f547bd536956276ea9609a00ff8870d615d2404ecb864b296646a5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
