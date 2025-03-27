<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* layout/parts/page_footer.html.twig */
class __TwigTemplate_8863755318b19efeefd3ef59eb477ae4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        yield "
";
        // line 35
        $context["js_files"] = Twig\Extension\CoreExtension::merge(($context["js_files"] ?? null), $this->extensions['Glpi\Application\View\Extension\PluginExtension']->getPluginsJsScriptsFiles(false));
        // line 36
        $context["js_modules"] = Twig\Extension\CoreExtension::merge(($context["js_modules"] ?? null), $this->extensions['Glpi\Application\View\Extension\PluginExtension']->getPluginsJsModulesFiles(false));
        // line 37
        yield "
            </main> ";
        // line 39
        yield "         </div> ";
        // line 40
        yield "      </div> ";
        // line 41
        yield "   </div> ";
        // line 42
        yield "
   <div class=\"floating-buttons d-inline-flex\">
      <span class=\"btn btn-secondary d-none me-1\" id=\"backtotop\">
         <i class=\"fas fa-arrow-up\" title=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Back to top of the page"), "html", null, true);
        yield "\">
            <span class=\"visually-hidden\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Top of the page"), "html", null, true);
        yield "</span>
         </i>
      </span>
   </div>

   ";
        // line 51
        if ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("maintenance_mode")) {
            // line 52
            yield "      <div id=\"maintenance-float\">
         <a href=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/config.form.php?forcetab=Config\$5"), "html", null, true);
            yield "\">GLPI MAINTENANCE MODE</a>
      </div>
   ";
        }
        // line 56
        yield "
   ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["js_files"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["js_file"]) {
            // line 58
            yield "      <script type=\"text/javascript\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->jsPath(CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "path", [], "any", false, false, false, 58), (((CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "options", [], "any", true, true, false, 58) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "options", [], "any", false, false, false, 58)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "options", [], "any", false, false, false, 58)) : ([]))), "html", null, true);
            yield "\"></script>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        yield "
   ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["js_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["js_file"]) {
            // line 62
            yield "      <script type=\"module\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->jsPath(CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "path", [], "any", false, false, false, 62), (((CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "options", [], "any", true, true, false, 62) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "options", [], "any", false, false, false, 62)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "options", [], "any", false, false, false, 62)) : ([]))), "html", null, true);
            yield "\"></script>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        yield "
</body>
</html>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout/parts/page_footer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  114 => 64,  105 => 62,  101 => 61,  98 => 60,  89 => 58,  85 => 57,  82 => 56,  76 => 53,  73 => 52,  71 => 51,  63 => 46,  59 => 45,  54 => 42,  52 => 41,  50 => 40,  48 => 39,  45 => 37,  43 => 36,  41 => 35,  38 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/parts/page_footer.html.twig", "/opt/lampp/htdocs/glpi/templates/layout/parts/page_footer.html.twig");
    }
}
