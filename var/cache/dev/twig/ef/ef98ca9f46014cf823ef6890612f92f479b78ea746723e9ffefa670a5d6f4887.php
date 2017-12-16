<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_673c123685bebbef0796a181c167e42b59b81907d8e0e5bd858f0888a6051c49 extends Twig_Template
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
        $__internal_5a3191b4ba7d273c04bd2a00239a76ee9253d06db4289951bf70e265d1e913e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a3191b4ba7d273c04bd2a00239a76ee9253d06db4289951bf70e265d1e913e7->enter($__internal_5a3191b4ba7d273c04bd2a00239a76ee9253d06db4289951bf70e265d1e913e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_35fb8d87f86528cdb8e3b7d64dc0098608090948e8199b0803478778897c0c84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35fb8d87f86528cdb8e3b7d64dc0098608090948e8199b0803478778897c0c84->enter($__internal_35fb8d87f86528cdb8e3b7d64dc0098608090948e8199b0803478778897c0c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_5a3191b4ba7d273c04bd2a00239a76ee9253d06db4289951bf70e265d1e913e7->leave($__internal_5a3191b4ba7d273c04bd2a00239a76ee9253d06db4289951bf70e265d1e913e7_prof);

        
        $__internal_35fb8d87f86528cdb8e3b7d64dc0098608090948e8199b0803478778897c0c84->leave($__internal_35fb8d87f86528cdb8e3b7d64dc0098608090948e8199b0803478778897c0c84_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
