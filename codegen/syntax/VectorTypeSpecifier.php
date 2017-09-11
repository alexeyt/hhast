<?hh
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<552338157d8b508a62809d1feefbbaf2>>
 */
namespace Facebook\HHAST;
use type Facebook\TypeAssert\TypeAssert;

final class VectorTypeSpecifier extends EditableSyntax {

  private EditableSyntax $_keyword;
  private EditableSyntax $_left_angle;
  private EditableSyntax $_type;
  private EditableSyntax $_trailing_comma;
  private EditableSyntax $_right_angle;

  public function __construct(
    EditableSyntax $keyword,
    EditableSyntax $left_angle,
    EditableSyntax $type,
    EditableSyntax $trailing_comma,
    EditableSyntax $right_angle,
  ) {
    parent::__construct('vector_type_specifier');
    $this->_keyword = $keyword;
    $this->_left_angle = $left_angle;
    $this->_type = $type;
    $this->_trailing_comma = $trailing_comma;
    $this->_right_angle = $right_angle;
  }

  public static function from_json(
    array<string, mixed> $json,
    int $position,
    string $source,
  ): this {
    $keyword = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['vector_type_keyword'],
      $position,
      $source,
    );
    $position += $keyword->width();
    $left_angle = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['vector_type_left_angle'],
      $position,
      $source,
    );
    $position += $left_angle->width();
    $type = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['vector_type_type'],
      $position,
      $source,
    );
    $position += $type->width();
    $trailing_comma = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['vector_type_trailing_comma'],
      $position,
      $source,
    );
    $position += $trailing_comma->width();
    $right_angle = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['vector_type_right_angle'],
      $position,
      $source,
    );
    $position += $right_angle->width();
    return new self(
      $keyword,
      $left_angle,
      $type,
      $trailing_comma,
      $right_angle,
    );
  }

  public function children(): KeyedTraversable<string, EditableSyntax> {
    yield 'keyword' => $this->_keyword;
    yield 'left_angle' => $this->_left_angle;
    yield 'type' => $this->_type;
    yield 'trailing_comma' => $this->_trailing_comma;
    yield 'right_angle' => $this->_right_angle;
  }

  public function rewrite_children(
    self::TRewriter $rewriter,
    ?Traversable<EditableSyntax> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $keyword = $this->_keyword->rewrite($rewriter, $parents);
    $left_angle = $this->_left_angle->rewrite($rewriter, $parents);
    $type = $this->_type->rewrite($rewriter, $parents);
    $trailing_comma = $this->_trailing_comma->rewrite($rewriter, $parents);
    $right_angle = $this->_right_angle->rewrite($rewriter, $parents);
    if (
      $keyword === $this->_keyword &&
      $left_angle === $this->_left_angle &&
      $type === $this->_type &&
      $trailing_comma === $this->_trailing_comma &&
      $right_angle === $this->_right_angle
    ) {
      return $this;
    }
    return new self($keyword, $left_angle, $type, $trailing_comma, $right_angle);
  }

  public function raw_keyword(): EditableSyntax {
    return $this->_keyword;
  }

  public function with_keyword(EditableSyntax $value): this {
    if ($value === $this->_keyword) {
      return $this;
    }
    return new self(
      $value,
      $this->_left_angle,
      $this->_type,
      $this->_trailing_comma,
      $this->_right_angle,
    );
  }

  public function hasKeyword(): bool {
    return !$this->_keyword->is_missing();
  }

  public function keyword(): VecToken {
    return TypeAssert::isInstanceOf(VecToken::class, $this->_keyword);
  }

  public function raw_left_angle(): EditableSyntax {
    return $this->_left_angle;
  }

  public function with_left_angle(EditableSyntax $value): this {
    if ($value === $this->_left_angle) {
      return $this;
    }
    return new self(
      $this->_keyword,
      $value,
      $this->_type,
      $this->_trailing_comma,
      $this->_right_angle,
    );
  }

  public function hasLeftAngle(): bool {
    return !$this->_left_angle->is_missing();
  }

  public function left_angle(): LessThanToken {
    return TypeAssert::isInstanceOf(LessThanToken::class, $this->_left_angle);
  }

  public function raw_type(): EditableSyntax {
    return $this->_type;
  }

  public function with_type(EditableSyntax $value): this {
    if ($value === $this->_type) {
      return $this;
    }
    return new self(
      $this->_keyword,
      $this->_left_angle,
      $value,
      $this->_trailing_comma,
      $this->_right_angle,
    );
  }

  public function hasType(): bool {
    return !$this->_type->is_missing();
  }

  public function type(): EditableSyntax {
    return TypeAssert::isInstanceOf(EditableSyntax::class, $this->_type);
  }

  public function raw_trailing_comma(): EditableSyntax {
    return $this->_trailing_comma;
  }

  public function with_trailing_comma(EditableSyntax $value): this {
    if ($value === $this->_trailing_comma) {
      return $this;
    }
    return new self(
      $this->_keyword,
      $this->_left_angle,
      $this->_type,
      $value,
      $this->_right_angle,
    );
  }

  public function hasTrailingComma(): bool {
    return !$this->_trailing_comma->is_missing();
  }

  public function trailing_comma(): EditableSyntax {
    return TypeAssert::isInstanceOf(EditableSyntax::class, $this->_trailing_comma);
  }

  public function raw_right_angle(): EditableSyntax {
    return $this->_right_angle;
  }

  public function with_right_angle(EditableSyntax $value): this {
    if ($value === $this->_right_angle) {
      return $this;
    }
    return new self(
      $this->_keyword,
      $this->_left_angle,
      $this->_type,
      $this->_trailing_comma,
      $value,
    );
  }

  public function hasRightAngle(): bool {
    return !$this->_right_angle->is_missing();
  }

  public function right_angle(): GreaterThanToken {
    return TypeAssert::isInstanceOf(GreaterThanToken::class, $this->_right_angle);
  }
}